<?php

namespace App\Http\Controllers;

use App\Models\AccountActivity;
use App\Models\AdminProfile;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Mail;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }

    public function accountactivity()
    {
        $activities = AccountActivity::all();
        return view('admin.account_activity', compact('activities'));
    }
    public function deleteactivity($id)
    {
        $activity = AccountActivity::where('id', $id)->first();
        $activity->delete();
        return redirect()->back();
    }
    public function changepassword()
    {
        return view('admin.change_password');
    }
    public function changepasswordform()
    {
        return view('admin.change_password_f');
    }

    public function admin_c_p(Request $request)
    {
        if ($request->password != $request->c_password) {
            return redirect()
                ->back()
                ->withErrors([
                    'The Passwords you entered Do Not Match. Please Try Again.',
                ]);
        } else {
            $admin = User::where('id', Auth::id())->first();
            $admin->update([
                'password' => Hash::make($request->password),
            ]);
            $data = [
                'name' => $admin->name,
                'email' => $admin->email,
                'password' => $request->password,
            ];
            Session::put('data', $data);
            Mail::send('reset-password-email', $data, function ($message) {
                $data = Session::get('data');
                $message
                    ->to($data['email'], $data['name'], $data['password'])
                    ->subject('Password-Changed');
                $message->from(env('MAIL_USERNAME'), 'xFusion App');
            });
            Session::flash('message', 'The Password was Updated Successfully!');
            return redirect()->back();
        }
    }
    public function profile()
    {
        return view('admin.profile_setting');
    }

    public function updateProfile(Request $request)
    {
        $admin = User::where('id', Auth::id())->first();
        $profile = AdminProfile::where('user_id', Auth::id())->first();
        $admin->update([
            'name' => $request->name,
        ]);
        $profile->update($request->all());
        return redirect()->back();
    }
    public function users()
    {
        $users = User::where('role', '!=', 'SuperAdmin')->get();
        return view('admin.users.list', compact('users'));
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();
        $user->update([
            'is_verified' => 1,
        ]);

        $data = ['name' => $user->name, 'email' => $user->email];
        Session::put('data', $data);
        if ($user->role == 'Admin') {
            Mail::send('verified_admin_email', $data, function ($message) {
                $data = Session::get('data');
                $message
                    ->to($data['email'], $data['name'])
                    ->subject('Account-Verified');
                $message->from(env('MAIL_USERNAME'), 'xFusion App');
            });
        } elseif ($user->role == 'Agent') {
            Mail::send('verified_agent_email', $data, function ($message) {
                $data = Session::get('data');
                $message
                    ->to($data['email'], $data['name'])
                    ->subject('Account-Verified');
                $message->from(env('MAIL_USERNAME'), 'xFusion App');
            });
        } else {
            Mail::send('verified_client_email', $data, function ($message) {
                $data = Session::get('data');
                $message
                    ->to($data['email'], $data['name'])
                    ->subject('Account-Verified');
                $message->from(env('MAIL_USERNAME'), 'xFusion App');
            });
        }
        return redirect()->back();
    }

    public function verify_user()
    {
        return view('verify');
    }
    // nishimura
    public function cars(Request $request, $filter = 'all')
    {
        $active = ['', '', '', ''];
        $search = $request->query('search');
        if (isset($search)) {
            $title = 'Search Result for '.$search;
            switch ($filter) {
                case 'all':
                    $carData = Car::where('name', '=', $search)->orWhere('description', 'like', '%'.$search.'%')->paginate(10);
                    $active[0] = 'nishimura_active';
                    break;
                default:
                    $carData = Car::where('status', '=', $filter)->where('name', '=', $search)->orWhere('description', 'like', '%'.$search.'%')->paginate(10);
                    if ($filter == 'open') {
                        $active[1] = 'nishimura_active';
                    }
                    if ($filter == 'checkout') {
                        $active[2] = 'nishimura_active';
                    }
                    if ($filter == 'return') {
                        $active[3] = 'nishimura_active';
                    }
                    break;
            }            
        }
        else {
            $title = 'List of Cars';
            switch ($filter) {
                case 'all':
                    $carData = Car::paginate(10);
                    $active[0] = 'nishimura_active';
                    break;
                default:
                    $carData = Car::where('status', '=', $filter)->paginate(10);
                    if ($filter == 'open') {
                        $active[1] = 'nishimura_active';
                    }
                    if ($filter == 'checkout') {
                        $active[2] = 'nishimura_active';
                    }
                    if ($filter == 'return') {
                        $active[3] = 'nishimura_active';
                    }
                    break;
            }
        }
        return view('admin.cars.list', compact('carData', 'active', 'title'));
    }
    public function updateDB() {
        $url = "https://vpic.nhtsa.dot.gov/api/vehicles/GetMakesForVehicleType/car?format=json";
        $output = file_get_contents($url);
        if($output) {
            $output = json_decode($output, true);
            $data = $output['Results'];
            foreach($data as $carData) {
                if (Car::where('make_id', '=', $carData['MakeId'])->count() > 0)
                    continue;
                $car = new Car;
                $car->make_id = $carData['MakeId'];
                $car->make_name = $carData['MakeName'];
                $car->vehicle_type_id = $carData['VehicleTypeId'];
                $car->vehicle_type_name = $carData['VehicleTypeName'];
                $car->status = 'open';
                $car->save();
            }
        }
        return 'Cars Data Updated';
        // return $output;
    }
    public function kanban(Request $request)
    {
        $applicants = Car::orderByDesc('updated_at')->paginate(10);
        $links = $applicants->links();
        $applicants = $applicants->groupBy('status');
        if ($request->ajax()) {
            $open = array();
            if(isset($applicants['Open'])) {
                foreach($applicants['Open'] as $applicant) {
                    $kb['title'] = '
                        <div class="kanban-item-title">
                            <h6 class="title">'.$applicant->name.'</h6>
                            <div class="drodown">
                                <div class="user-avatar-group">
                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-item-text">
                            <p>'.$applicant->description.'</p>
                        </div>
                        <ul class="kanban-item-tags">
                            <li><span class="badge badge-primary">Dashlite</span></li>
                            <li><span class="badge badge-danger">UI Design</span></li>
                        </ul>
                        <div class="kanban-item-meta">
                            <ul class="kanban-item-meta-list">
                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>'.$applicant->updated_at.'</span></li>
                            </ul>
                            <ul class="kanban-item-meta-list">
                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                            </ul>
                        </div>';
                    $kb['id'] = $applicant->id;
                    $open[] = $kb;
                }
            }
            $open = json_encode($open);
            $inProgress = array();
            if(isset($applicants['InProgress'])) {
                foreach($applicants['InProgress'] as $applicant) {
                    $kb['title'] = '
                        <div class="kanban-item-title">
                            <h6 class="title">'.$applicant->name.'</h6>
                            <div class="drodown">
                                <div class="user-avatar-group">
                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-item-text">
                            <p>'.$applicant->description.'</p>
                        </div>
                        <ul class="kanban-item-tags">
                            <li><span class="badge badge-primary">Dashlite</span></li>
                            <li><span class="badge badge-danger">UI Design</span></li>
                        </ul>
                        <div class="kanban-item-meta">
                            <ul class="kanban-item-meta-list">
                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>'.$applicant->updated_at.'</span></li>
                            </ul>
                            <ul class="kanban-item-meta-list">
                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                            </ul>
                        </div>';
                    $kb['id'] = $applicant->id;
                    $inProgress[] = $kb;
                }
            }
            $inProgress = json_encode($inProgress);
            $staged = array();
            if(isset($applicants['Staged'])) {
                foreach($applicants['Staged'] as $applicant) {
                    $kb['title'] = '
                        <div class="kanban-item-title">
                            <h6 class="title">'.$applicant->name.'</h6>
                            <div class="drodown">
                                <div class="user-avatar-group">
                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-item-text">
                            <p>'.$applicant->description.'</p>
                        </div>
                        <ul class="kanban-item-tags">
                            <li><span class="badge badge-primary">Dashlite</span></li>
                            <li><span class="badge badge-danger">UI Design</span></li>
                        </ul>
                        <div class="kanban-item-meta">
                            <ul class="kanban-item-meta-list">
                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>'.$applicant->updated_at.'</span></li>
                            </ul>
                            <ul class="kanban-item-meta-list">
                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                            </ul>
                        </div>';
                    $kb['id'] = $applicant->id;
                    $staged[] = $kb;
                }
            }
            $staged = json_encode($staged);
            $declined = array();
            if(isset($applicants['Declined'])) {
                foreach($applicants['Declined'] as $applicant) {
                    $kb['title'] = '
                        <div class="kanban-item-title">
                            <h6 class="title">'.$applicant->name.'</h6>
                            <div class="drodown">
                                <div class="user-avatar-group">
                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-item-text">
                            <p>'.$applicant->description.'</p>
                        </div>
                        <ul class="kanban-item-tags">
                            <li><span class="badge badge-primary">Dashlite</span></li>
                            <li><span class="badge badge-danger">UI Design</span></li>
                        </ul>
                        <div class="kanban-item-meta">
                            <ul class="kanban-item-meta-list">
                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>'.$applicant->updated_at.'</span></li>
                            </ul>
                            <ul class="kanban-item-meta-list">
                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                            </ul>
                        </div>';
                    $kb['id'] = $applicant->id;
                    $declined[] = $kb;
                }
            }
            $declined = json_encode($declined);
            return compact('open', 'inProgress', 'staged', 'declined');
        }
        else
            return view('admin.recruitment.kanban', compact('applicants', 'links'));
    }
    public function details($id)
    {
        $car = Car::find($id);
        return view('admin.recruitment.details', compact('car'));
    }
    public function checkout(Request $request, $id)
    {
        $car = Car::find($id);
        $car->status = 'checkout';
        $car->person = $request->input('name');
        $car->time = $request->input('time');
        $car->save();
        return $car->make_name;
    }
    public function return($id)
    {
        $car = Car::find($id);
        $car->status = 'return';
        $car->time = Carbon::now();
        $car->save();
        return $car->make_name;
    }
}
