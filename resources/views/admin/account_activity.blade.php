@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content"><h4 class="nk-block-title">Login Activity</h4>
                                    </div>
                                    <div class="nk-block-head-content align-self-start d-lg-none"><a href="#"
                                                                                                     class="toggle btn btn-icon btn-trigger mt-n1"
                                                                                                     data-target="userAside"><em
                                                    class="icon ni ni-menu-alt-r"></em></a></div>
                                </div>
                            </div>
                            <div class="nk-block card card-bordered">
                                <table class="table table-ulogs">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="tb-col-os"><span class="overline-title">Browser <span
                                                        class="d-sm-none">/ IP</span></span></th>
                                        <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                        <th class="tb-col-time"><span class="overline-title">Time</span></th>
                                        <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($activities as $activity)
                                    <tr>
                                        <td class="tb-col-os">{{ $activity->last_login_browser }}</td>
                                        <td class="tb-col-ip"><span class="sub-text">{{ $activity->last_login_ip }}</span></td>
                                        <td class="tb-col-time"><span class="sub-text">{{\Carbon\Carbon::parse($activity->last_login_at)->format('d M')}}  <span
                                                        class="d-none d-sm-inline-block">{{ date('H:i a', strtotime($activity->last_login_at)) }}</span></span></td>
                                        <td class="tb-col-action"><a href="{{ route('delete.activity', $activity->id) }}" class="link-cross mr-sm-n1"><em
                                                        class="icon ni ni-trash"></em></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                             data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="card-inner-group" data-simplebar>
                                <div class="card-inner">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{ Auth::user()->name }}</span>
                                            <span class="sub-text">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="user-action">
                                            <div class="dropdown">
                                                <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown"
                                                   href="#"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .user-card -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <ul class="link-list-menu">
                                        <li><a href="{{ route('admin.profile') }}"><em
                                                        class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a>
                                        </li>
                                        <li><a href="html/user-profile-notification.html"><em
                                                        class="icon ni ni-bell-fill"></em><span>Notifications</span></a>
                                        </li>
                                        <li><a class="active" href="{{ route('account.activity') }}"><em
                                                        class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a>
                                        </li>
                                        <li><a href="{{ route('admin.change.password') }}"><em
                                                        class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a>
                                        </li>
                                    </ul>
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- card-aside -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
<!-- content @e -->


@include('admin/layouts/footer_scripts')
