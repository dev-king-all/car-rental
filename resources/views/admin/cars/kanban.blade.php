@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <input type="hidden" id="_token" value={{csrf_token()}} />
    <input type="hidden" id="nishimura_refresh" value="0" />
    <!-- content @s -->
    <div class = "Open">
        @php($open = array())
        @if(isset($applicants['Open']))
            @foreach($applicants['Open'] as $applicant)
            @php($kb['title'] = '
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
                </div>
            ')
            @php($kb['id'] = $applicant->id)
            @php ($open[] = $kb)
            @endforeach
        @endif
        {{json_encode($open)}}
    </div>
    <div class = "InProgress">
        @php($open = array())
        @if(isset($applicants['InProgress']))
            @foreach($applicants['InProgress'] as $applicant)
            @php($kb['title'] = '
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
                </div>
            ')
            @php($kb['id'] = $applicant->id)
            @php ($open[] = $kb)
            @endforeach
        @endif
        {{json_encode($open)}}
    </div>
    <div class = "Staged">
    @php($open = array())
        @if(isset($applicants['Staged']))
            @foreach($applicants['Staged'] as $applicant)
            @php($kb['title'] = '
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
                </div>
            ')
            @php($kb['id'] = $applicant->id)
            @php ($open[] = $kb)
            @endforeach
        @endif
        {{json_encode($open)}}
    </div>
    <div class = "Declined">
    @php($open = array())
        @if(isset($applicants['Declined']))
            @foreach($applicants['Declined'] as $applicant)
            @php($kb['title'] = '
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
                </div>
            ')
            @php($kb['id'] = $applicant->id)
            @php ($open[] = $kb)
            @endforeach
        @endif
        {{json_encode($open)}}
    </div>
    <div class="card nk-content nk-content-fluid">
        <div class="container-xl wide-lg" style = "max-width: 1400px;">
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
                                    
                                </div>
                            </div>
                            {{-- <hr />
                             {!! $links !!} --}}
                        </div>
                    </div>
                </div>
            </div>
            <div id = "loading" class="text-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div>
                
            </div>
        </div>
    </div>
    <!-- content @e -->
    @include('admin/layouts/footer_scripts')
