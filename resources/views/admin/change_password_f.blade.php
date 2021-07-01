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
                    <div class="card-inner">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                        <form action="{{ route('admin_c_p') }}" method="post">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group"><label class="form-label"
                                                                   for="password">Password</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control"
                                                                              id="password"
                                                                              name="password" required=""></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="form-label"
                                                                   for="c_password">Confirm Password</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control"
                                                                              id="c_password"
                                                                              name="c_password" required=""></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <a href="{{ route('admin.change.password') }}" class="btn btn-info">Back</a>
                                        <input type="submit" value="Save" class="btn btn-success">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
<!-- content @e -->


@include('admin/layouts/footer_scripts')
