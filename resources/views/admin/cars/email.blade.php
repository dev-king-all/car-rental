@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <input type="hidden" id="_token" value={{csrf_token()}} />
    <input type="hidden" id="nishimura_refresh" value="0" />
    <!-- content @s -->
    <div class="card nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="container">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-md">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">List of Applicants</h3>
                                            </div>
                                        </div>
                                        <div class="nk-ibx">
                                            <div class="nk-ibx-body bg-white">
                                                <div class="nk-ibx-head">
                                                    <div>
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            <li><a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="search-wrap" data-search="search">
                                                        <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                                                    </div>
                                                </div>
                                                <div class="nk-ibx-list" data-simplebar="init">
                                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                                        <div class="simplebar-height-auto-observer-wrapper">
                                                            <div class="simplebar-height-auto-observer"></div>
                                                        </div>
                                                        <div class="simplebar-mask">
                                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                                                    <div class="simplebar-content" style="padding: 0px;">
                                                                        <div class="nk-ibx-item">
                                                                            <div style = "min-width: 40px;">
                                                                                <div class = "lead-text">No</div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                                                <div class="user-card">
                                                                                    <div class = "lead-text">Avatar</div>
                                                                                    <div class="lead-text" style = "margin-left: 20px;">
                                                                                        Name
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                                <div class="lead-text">
                                                                                    Description
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="lead-text">
                                                                                    Date
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time" style = "margin-left: -5x; ">
                                                                                <div class="lead-text">
                                                                                    Status
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-tools" style = "margin-left: -15px;">
                                                                                <div class="lead-text">
                                                                                    Actions
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @php ($i = 1)
                                                                        @foreach($mailData as $mail)
                                                                        <div class="nk-ibx-item">
                                                                            <a data-id={{$mail->id}} href="javascript:;" class="nk-ibx-link current"></a>
                                                                            <div style = "min-width: 40px;">
                                                                                <div class = "lead-text">{{$i}}</div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                                                <div class="user-card">
                                                                                    <div class="user-avatar"><img src="/admin/images/avatar/{{$i % 4}}-sm.jpg" alt=""></div>
                                                                                    <div class="user-name">
                                                                                        <div class="lead-text">
                                                                                            {{$mail->name}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                                <div class="nk-ibx-context-group">
                                                                                    <div class="nk-ibx-context">
                                                                                        <span class="nk-ibx-context-text">
                                                                                            {{$mail->description}}
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="sub-text">
                                                                                    {{$mail->received_at}}
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="sub-text">
                                                                                    @php($s_id = $mail->id.'_status')
                                                                                    @if($mail->status == 'Open')
                                                                                        <span id = {{$s_id}} class = "badge badge-dim badge-sm badge-outline-success">{{$mail->status}}</span>    
                                                                                    @endif
                                                                                    @if($mail->status == 'InProgress')
                                                                                        <span id = {{$s_id}} class = "badge badge-dim badge-sm badge-outline-warning">{{$mail->status}}</span>    
                                                                                    @endif
                                                                                    @if($mail->status == 'Declined')
                                                                                        <span id = {{$s_id}} class = "badge badge-dim badge-sm badge-outline-danger">{{$mail->status}}</span>    
                                                                                    @endif
                                                                                    @if($mail->status == 'Staged')
                                                                                        <span id = {{$s_id}} class = "badge badge-dim badge-sm badge-outline-info">{{$mail->status}}</span>    
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                                                <div class="ibx-actions">
                                                                                    <ul class="ibx-actions-visible gx-2">
                                                                                        <li>
                                                                                            <div class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                                    <ul class="link-list-opt no-bdr">
                                                                                                        <li><a data-id="{{$mail->id}}" data-email="{{$mail->email}}" class="dropdown-item nishimura_stage" href="javascript:;"><em class="icon ni ni-check-thick"></em><span>Stage</span></a>
                                                                                                        </li>
                                                                                                        <li><a data-id="{{$mail->id}}" data-email="{{$mail->email}}"   class="dropdown-item nishimura_onHold" href="javascript:;"><em class="icon ni ni-clock"></em><span>Hold</span></a>
                                                                                                        </li>
                                                                                                        <li><a data-id="{{$mail->id}}" data-email="{{$mail->email}}" class="dropdown-item nishimura_decline" href="javascript:;"><em class="icon ni ni-cross"></em><span>Decline</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @php ($i++)
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-placeholder" style="width: auto; height: 1167px;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                                        <div class="simplebar-scrollbar" style="height: 38px; transform: translate3d(0px, 0px, 0px); display: block;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    @include('admin/layouts/footer_scripts')
