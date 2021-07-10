@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">


<!-- content @s -->
<div class="card nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">

            <div class="container">
                <h4>User List</h4>
                <br>
                <div class="card card-preview">
                    <div class="card-inner">
                        <table class="datatable-init table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                {{ $user->is_verified == 1 ? 'Active' : 'Pending Verification' }}
                                @if($user->is_verified == 0)
                                <form action="{{ route('update.verification.status', $user->id) }}">
                                    @csrf
                                <button type="submit" class="btn-sm btn-success">Verify User</button>
                                </form>
                                    @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
<!-- content @e -->
@include('admin/layouts/footer_scripts')
