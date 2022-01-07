@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <input type="hidden" id="_token" value={{csrf_token()}} />
    @if($active[0] == 'nishimura_active')
    <input type="hidden" id="nishimura_refresh" value="0" />
    @else
    <input type="hidden" id="nishimura_refresh" value="1" />
    @endif
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
                                                <h3 class="nk-block-title page-title">{{$title}}</h3>
                                            </div>
                                        </div>
                                        <div class="nk-ibx">
                                            <div class="nk-ibx-body bg-white">
                                                <div class="nk-ibx-head">
                                                    <div class="nk-ibx-head-actions">
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            <li class="d-none d-sm-block {{$active[0]}}"><a href="{{URL::to('/cars/list/all')}}" class="btn btn-icon btn-trigger"><em class="icon ni ni-list-index-fill"></em>Show All</a></li>
                                                            <li class="d-none d-sm-block {{$active[1]}}"><a href="{{URL::to('/cars/list/open')}}" class="btn btn-icon btn-trigger"><em class="icon ni ni-clock"></em>Open</a></li>
                                                            <li class="d-none d-sm-block {{$active[2]}}"><a href="{{URL::to('/cars/list/checkout')}}" class="btn btn-icon btn-trigger"><em class="icon ni ni-check-thick"></em>Checked Out</a></li>
                                                            <li class="d-none d-sm-block {{$active[3]}}"><a href="{{URL::to('/cars/list/return')}}" class="btn btn-icon btn-trigger"><em class="icon ni ni-circle"></em>Returned</a></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            <li><a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="search-wrap" data-search="search">
                                                        <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" id="search_text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
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
                                                                            <div class="nk-ibx-item-elem">
                                                                                <div class="lead-text">No</div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                                                <div class="user-card">
                                                                                    <div class="lead-text">ID</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                                <div class="lead-text">
                                                                                    Name
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                                <div class="lead-text">
                                                                                    Type
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="lead-text">
                                                                                    Status
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="lead-text">
                                                                                    Extra
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                                                <div class="lead-text">
                                                                                    Actions
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @php ($i = $carData->firstItem())
                                                                        @foreach($carData as $car)
                                                                        <div class="nk-ibx-item">
                                                                            <a data-id={{$car->id}} href="{{URL::to('/cars/details/'.$car->id)}}" class="nk-ibx-link current"></a>
                                                                            <div class="nk-ibx-item-elem">
                                                                                <div class="lead-text">{{$i}}</div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                                                <div class="user-card">
                                                                                    <div class="user-name">
                                                                                        <div class="lead-text">
                                                                                            {{$car->make_id}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                                <div class="nk-ibx-context-group">
                                                                                    <div class="nk-ibx-context">
                                                                                        <span class="nk-ibx-context-text">
                                                                                            {{$car->make_name}}
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                                <div class="sub-text">
                                                                                    {{$car->vehicle_type_name}}
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="sub-text">
                                                                                    @php($s_id = $car->id.'_status')
                                                                                    @if($car->status == 'open')
                                                                                    <span id={{$s_id}} class="badge badge-dim badge-sm badge-outline-success">{{$car->status}}</span>
                                                                                    @endif
                                                                                    @if($car->status == 'checkout')
                                                                                    <span id={{$s_id}} class="badge badge-dim badge-sm badge-outline-danger">{{$car->status}}</span>
                                                                                    @endif
                                                                                    @if($car->status == 'return')
                                                                                    <span id={{$s_id}} class="badge badge-dim badge-sm badge-outline-info">{{$car->status}}</span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                                <div class="user-card">
                                                                                    <div class="user-name">
                                                                                        <div class="lead-text">

                                                                                        </div>
                                                                                    </div>
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
                                                                                                        @if($car->status == 'open')
                                                                                                        <li><a data-id="{{$car->id}}" class="dropdown-item check_out_action" data-target="#modalForm" data-toggle="modal" href="javascript:;"><em class="icon ni ni-check-thick"></em><span>Check Out</span></a>
                                                                                                        </li>
                                                                                                        @elseif($car->status == 'check_out')
                                                                                                        <li><a data-id="{{$car->id}}" class="dropdown-item return" href="javascript:;"><em class="icon ni ni-circle"></em><span>Return</span></a>
                                                                                                        </li>
                                                                                                        @endif
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
                                                                        {{$carData->links()}}
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
    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5><a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter" novalidate="novalidate">
                        <div class="form-group"><label class="form-label" for="full-name">Name</label>
                            <div class="form-control-wrap"><input type="text" class="form-control" id="name" required=""></div>
                        </div>
                        <div class="form-group"><label class="form-label" for="checkout-time">Amount</label>
                            <div class="form-control-wrap"><input type="date" class="form-control" id="checkout-time"></div>
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-lg btn-primary check_out">Check Out</button></div>
                    </form>
                </div>
                <div class="modal-footer bg-light"><span class="sub-text">Modal Footer Text</span></div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    @include('admin/layouts/footer_scripts')
