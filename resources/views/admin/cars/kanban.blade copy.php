@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <input type="hidden" id="_token" value={{csrf_token()}} />
    <input type="hidden" id="nishimura_refresh" value="0"/>
    <!-- content @s -->
    <div class="card nk-content nk-content-fluid">
        <div class="container-xl wide-lg" style = "min-width: 1400px;">
            <div class="nk-content-body">
                <div class="container">
                    <div class="container">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Kanban Board</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div id="kanban" class="nk-kanban">
                                    <div class="kanban-container" style="width: 1280px; margin: auto;">
                                        <div data-id="_open" data-order="1" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header kanban-success">
                                                <div class="kanban-title-board">
                                                    <div class="kanban-title-content">
                                                        <h6 class="title">Approved</h6>
                                                        <span class="badge badge-pill badge-outline-light text-dark">3</span>
                                                    </div>
                                                </div>
                                            </header>
                                            <main class="kanban-drag">
                                                @if(isset($applicants['Approved']))
                                                    @foreach($applicants['Approved'] as $applicant)
                                                    <div class="kanban-item">
                                                        <div class="kanban-item-title">
                                                            <h6 class="title">{{$applicant->name}}</h6>
                                                            <div class="drodown">
                                                                <div class="user-avatar-group">
                                                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kanban-item-text">
                                                            <p>{{$applicant->description}}</p>
                                                        </div>
                                                        <ul class="kanban-item-tags">
                                                            <li><span class="badge badge-info">Dashlite</span></li>
                                                            <li><span class="badge badge-danger">UI Design</span></li>
                                                        </ul>
                                                        <div class="kanban-item-meta">
                                                            <ul class="kanban-item-meta-list">
                                                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>{{$applicant->updated_at}}</span></li>
                                                            </ul>
                                                            <ul class="kanban-item-meta-list">
                                                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </main>
                                        </div>
                                        <div data-id="_in_progress" data-order="2" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header kanban-warning">
                                                <div class="kanban-title-board">
                                                    <div class="kanban-title-content">
                                                        <h6 class="title">On Hold</h6>
                                                        <span class="badge badge-pill badge-outline-light text-dark">4</span>
                                                    </div>
                                                </div>
                                            </header>
                                            <main class="kanban-drag">
                                                @if(isset($applicants['OnHold']))
                                                    @foreach($applicants['OnHold'] as $applicant)
                                                    <div class="kanban-item">
                                                        <div class="kanban-item-title">
                                                            <h6 class="title">{{$applicant->name}}</h6>
                                                            <div class="drodown">
                                                                <div class="user-avatar-group">
                                                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kanban-item-text">
                                                            <p>{{$applicant->description}}</p>
                                                        </div>
                                                        <ul class="kanban-item-tags">
                                                            <li><span class="badge badge-info">Dashlite</span></li>
                                                            <li><span class="badge badge-danger">UI Design</span></li>
                                                        </ul>
                                                        <div class="kanban-item-meta">
                                                            <ul class="kanban-item-meta-list">
                                                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>{{$applicant->updated_at}}</span></li>
                                                            </ul>
                                                            <ul class="kanban-item-meta-list">
                                                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </main>
                                        </div>
                                        <div data-id="_to_review" data-order="3" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header kanban-danger">
                                                <div class="kanban-title-board">
                                                    <div class="kanban-title-content">
                                                        <h6 class="title">Rejected</h6>
                                                        <span class="badge badge-pill badge-outline-light text-dark">2</span>
                                                    </div>
                                                </div>
                                            </header>
                                            <main class="kanban-drag">
                                                @if(isset($applicants['Rejected']))
                                                    @foreach($applicants['Rejected'] as $applicant)
                                                    <div class="kanban-item">
                                                        <div class="kanban-item-title">
                                                            <h6 class="title">{{$applicant->name}}</h6>
                                                            <div class="drodown">
                                                                <div class="user-avatar-group">
                                                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kanban-item-text">
                                                            <p>{{$applicant->description}}</p>
                                                        </div>
                                                        <ul class="kanban-item-tags">
                                                            <li><span class="badge badge-info">Dashlite</span></li>
                                                            <li><span class="badge badge-danger">UI Design</span></li>
                                                        </ul>
                                                        <div class="kanban-item-meta">
                                                            <ul class="kanban-item-meta-list">
                                                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>{{$applicant->updated_at}}</span></li>
                                                            </ul>
                                                            <ul class="kanban-item-meta-list">
                                                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </main>
                                        </div>
                                        <div data-id="_completed" data-order="4" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header kanban-info">
                                                <div class="kanban-title-board">
                                                    <div class="kanban-title-content">
                                                        <h6 class="title">Not Decided</h6>
                                                        <span class="badge badge-pill badge-outline-light text-dark">0</span>
                                                    </div>
                                                </div>
                                            </header>
                                            <main class="kanban-drag">
                                                @if(isset($applicants['NotDecided']))
                                                    @foreach($applicants['NotDecided'] as $applicant)
                                                    <div class="kanban-item">
                                                        <div class="kanban-item-title">
                                                            <h6 class="title">{{$applicant->name}}</h6>
                                                            <div class="drodown">
                                                                <div class="user-avatar-group">
                                                                    <div class="user-avatar xs bg-primary"><span>A</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kanban-item-text">
                                                            <p>{{$applicant->description}}</p>
                                                        </div>
                                                        <ul class="kanban-item-tags">
                                                            <li><span class="badge badge-info">Dashlite</span></li>
                                                            <li><span class="badge badge-danger">UI Design</span></li>
                                                        </ul>
                                                        <div class="kanban-item-meta">
                                                            <ul class="kanban-item-meta-list">
                                                                <li class="text-primary"><em class="icon ni ni-calendar"></em><span>{{$applicant->updated_at}}</span></li>
                                                            </ul>
                                                            <ul class="kanban-item-meta-list">
                                                                <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                                                <li><em class="icon ni ni-comments"></em><span>4</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </main>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            {!! $links !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    @include('admin/layouts/footer_scripts')
