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

                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Helpdesk User</h3>
                            <div class="nk-block-des text-soft">
                                <p>124 Helpdesk Users.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modalTabs"><em class="icon ni ni-user-add"></em><span>Add Helpdesk User(s)</span> </a>
                                        </li>
                                        <li >
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-secondary" data-toggle="dropdown"><span>Export As:</span><em class="icon ni ni-chevron-down"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-auto mt-1">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#"><em class="icon ni ni-file"></em>CSV</a></li>
                                                        <li><a href="#"><em class="icon ni ni-file-pdf"></em>PDF</a></li>
                                                        <li><a href="#"><em class="icon ni ni-file-xls"></em>XLS</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-preview">
                    <div class="card-inner">
                        <table class="datatable-init table">
                            <thead>
                            <tr>
                                <th>Mailbox Id</th>
                                <th>Conversation Id</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($main_array as $key=>$value)
                                @php
                                $new_array = (array)$value;
                                $array = array();
                                foreach ($new_array as $k => $v) {
                                    $k = preg_match('/^\x00(?:.*?)\x00(.+)/', $k, $matches) ? $matches[1] : $k;
                                    $array[$k] = $v;




                                }
                                $customer_array = (array)$array['customer'];
                                $array2 = array();
                                foreach ($customer_array as $k => $v) {
                                    $k = preg_match('/^\x00(?:.*?)\x00(.+)/', $k, $matches) ? $matches[1] : $k;
                                    $array2[$k] = $v;


                                }
                                 $client = app('helpscout');
$conversation = $client->conversations()->get($array['id']);

                                @endphp

                                <tr>
                                    <td>
                                        {{ ($array['mailboxId']) }}
                                    </td>
                                    <td> {{ ($array['id']) }}</td>
                                    <td>
                                        <a href="{{ route('admin.conversation.details', $array['id']) }}">View Details</a>
                                    </td>
                                    {{--<td><a href="html/index.html" class="nk-menu-link" data-original-title="" title="">--}}
                                    {{--<form action="{{ route('admin.helpscout.response') }}" method="POST">--}}
                                    {{--@csrf--}}
                                    {{--<button class="btn-sm btn-success" type="submit">Help Desk testing</button>--}}
                                    {{--</form>--}}
                                    {{--</a></td>--}}
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

<!-- Modal Tabs -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTabs">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h4 class="title">Create Helpdesk User</h4>
                </br>
                <div class="tab-content">
                    <form action="#" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="user-fullname">Full Name</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-user"></em>
                                </div>
                                <input type="text" class="form-control" id="user-fullname" placeholder="Input Full Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="user-email">Email Address</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-mail"></em>
                                </div>
                                <input type="text" class="form-control" id="user-email" placeholder="Input Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Helpdesk User Role</label>
                            <div class="form-control-wrap">
                                <select class="form-select form-control form-control-lg">
                                    <option value="default_option">Agent</option>
                                    <option value="option_select_name">Administrator</option>
                                    <option value="option_select_name">Client</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="reg-public" id="send-user-email">
                                <label class="custom-control-label" for="send-user-email">Send Set Password Email?</label>
                            </div>
                        </div>
                        <p><strong>- OR -</strong></p>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="user-password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>

                            <input type="password" class="form-control form-control-lg" id="user-password" placeholder="Enter your Password">
                        </div>
                        </br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save Helpdesk User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal Tabs -->

<!-- content @e -->
@include('admin/layouts/footer_scripts')
