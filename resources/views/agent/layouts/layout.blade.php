<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
        <link rel="shortcut icon" href="{{ asset('./admin/images/favicon.png ') }}">
    <!-- Page Title  -->
    <title>xFusion App | Agents</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('agent/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('./admin/assets/css/skins/theme-green.css') }}">
</head>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    <!-- wrap @s -->
    <div class="nk-wrap ">
        <!-- main header @s -->
        <div class="nk-header nk-header-fluid is-theme">
            <div class="container-xl wide-xl">
                <div class="nk-header-wrap">
                    <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-header-brand">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="{{ asset('./admin/images/logo.png') }}" srcset="{{ asset('./admin/images/logo2x.png 2x') }}" alt="logo">
                            <img class="logo-dark logo-img" src="{{ asset('./admin/images/logo-dark.png') }}" srcset="{{ asset('./admin/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                        </a>
                    </div><!-- .nk-header-brand -->
                    <div class="nk-header-menu" data-content="headerNav">
                        <div class="nk-header-mobile">
                            <div class="nk-header-brand">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="{{ asset('./admin/images/logo.png') }}" srcset="{{ asset('./admin/images/logo2x.png 2x') }}" alt="logo">
                            <img class="logo-dark logo-img" src="{{ asset('./admin/images/logo-dark.png') }}" srcset="{{ asset('./admin/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                        </a>
                            </div>
                            <div class="nk-menu-trigger mr-n2">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                        <ul class="nk-menu nk-menu-main ui-s2">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-text">Clients</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Client Observations</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Client Rosters</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">CSAT Scores</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Inbound Traffic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-text">Client Responses</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-text">Employees</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-text">Confidential Notes</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-text">Employee Leaves</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Employee Rosters</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Payments</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Employee Responses</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Work Logs</span></a>
                                    </li>
                                    <!-- .nk-menu-item -->
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-text">Operations</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-text">Online Agents</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-text">Quality Complaints</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Performance Reviews</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Endorsable Skills</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Endorsments</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Employee Transfer Requests</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Position Descriptions</span></a>
                                    </li>
                                    <!-- .nk-menu-item -->
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div><!-- .nk-header-menu -->
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <li class="dropdown notification-dropdown">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                    <div class="dropdown-head">
                                        <span class="sub-title nk-dropdown-title">Notifications</span>
                                        <a href="#">Mark All as Read</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <div class="nk-notification">
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon">
                                                    <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-notification -->
                                    </div><!-- .nk-dropdown-body -->
                                    <div class="dropdown-foot center">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li><!-- .dropdown -->
                            <li class="dropdown user-dropdown order-sm-first">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm">
                                            <em class="icon ni ni-user-alt"></em>
                                        </div>
                                        @if(Auth::user())
                                        <div class="user-info d-none d-xl-block">
                                            <div class="user-status" style="text-transform: capitalize;">{{ Auth::user()->role }}</div>
                                            <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                        </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="html/invest/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                            <li><a href="html/invest/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                            <li><a href="html/invest/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                            <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <em class="icon ni ni-signout"></em><span>  {{ __('Sign out') }}</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li><!-- .dropdown -->
                        </ul><!-- .nk-quick-nav -->
                    </div><!-- .nk-header-tools -->
                </div><!-- .nk-header-wrap -->
            </div><!-- .container-fliud -->
        </div>
        <!-- main header @e -->


@yield('content');


        <!-- footer @s -->
        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; 2021 xFusion. All Rights Reserved.
                    </div>
                    <div class="nk-footer-links">
                        <ul class="nav nav-sm">
                            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer @e -->
    </div>
    <!-- wrap @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{ asset('agent/js/bundle.js?ver=2.4.0') }}"></script>
<script src="{{ asset('agent/js/scripts.js?ver=2.4.0') }}"></script>
<script src="{{ asset('agent/js/charts/gd-invest.js?ver=2.4.0') }}"></script>
</body>

</html>