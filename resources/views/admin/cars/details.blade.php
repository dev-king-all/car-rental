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
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title"><strong class="text-primary small">{{$applicant->name}}</strong></h3>
                                    <div class="nk-block-des text-soft">
                                        <ul class="list-inline">
                                            <li>Application ID: <span class="text-base">{{$applicant->id}}</span></li>
                                            <li>Submited At: <span class="text-base">{{$applicant->received_at}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-block-head-content"><a href="javascript:window. history. back();" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a><a href="javascript:window. history. back();" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a></div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-5">
                                <div class="col-lg-5">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Application Info</h5>
                                            <p>Submission date, approve date, status etc.</p>
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <ul class="data-list is-compact">
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Submitted By</div>
                                                    <div class="data-value">UD01489</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Submitted At</div>
                                                    <div class="data-value">{{$applicant->received_at}}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Status</div>
                                                    <div class="data-value">
                                                        @if($applicant->status == 'Open')
                                                        <span class="badge badge-dim badge-sm badge-outline-success">{{$applicant->status}}</span>
                                                        @endif
                                                        @if($applicant->status == 'InProgress')
                                                        <span class="badge badge-dim badge-sm badge-outline-warning">{{$applicant->status}}</span>
                                                        @endif
                                                        @if($applicant->status == 'Declined')
                                                        <span class="badge badge-dim badge-sm badge-outline-danger">{{$applicant->status}}</span>
                                                        @endif
                                                        @if($applicant->status == 'Staged')
                                                        <span class="badge badge-dim badge-sm badge-outline-info">{{$applicant->status}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Last Checked</div>
                                                    <div class="data-value">
                                                        <div class="user-card">
                                                            <div class="user-avatar user-avatar-xs bg-orange-dim"><span>AB</span></div>
                                                            <div class="user-name"><span class="tb-lead">Saiful Islam</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Last Checked At</div>
                                                    <div class="data-value">{{$applicant->updated_at}}</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Uploaded Documents</h5>
                                            <p>Here is user uploaded documents.</p>
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <ul class="data-list is-compact">
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Document Type</div>
                                                    <div class="data-value">National ID Card</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Front Side</div>
                                                    <div class="data-value">National ID Card</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Back Side</div>
                                                    <div class="data-value">National ID Card</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Proof/Selfie</div>
                                                    <div class="data-value">National ID Card</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Applicant Information</h5>
                                            <p>Basic info, like name, phone, address, country etc.</p>
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <ul class="data-list is-compact">
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">First Name</div>
                                                    @php($name = explode(" ", $applicant->name))
                                                    <div class="data-value">{{array_shift($name)}}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Last Name</div>
                                                    <div class="data-value">{{implode($name)}}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Email Address</div>
                                                    <div class="data-value">{{$applicant->email}}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Phone Number</div>
                                                    <div class="data-value text-soft"><em></em></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Date of Birth</div>
                                                    <div class="data-value">28 Oct, 2015</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Full Address</div>
                                                    <div class="data-value">6516, Eldoret, Uasin Gishu, 30100</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Country of Residence</div>
                                                    <div class="data-value">Kenya</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Full Address</div>
                                                    <div class="data-value">6516, Eldoret, Uasin Gishu, 30100</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Wallet Type</div>
                                                    <div class="data-value">Bitcoin</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Wallet Address</div>
                                                    <div class="data-value text-break">1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Telegram</div>
                                                    <div class="data-value"><span>@tokenlite</span> <a href="https://t.me/tokenlite" target="_blank"><em class="icon ni ni-telegram"></em></a></div>
                                                </div>
                                            </li>
                                        </ul>
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
