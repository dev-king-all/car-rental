@include('admin/layouts/head')
<?php
Session::put('role', 'client');
?>
<body class="nk-body npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="form-note-s2 pt-4"> Switch Login to:</div>
                                <div class="btn-group text-center">
                                    <button type="button" class="btn btn-dim btn-outline-primary"><a href="{{route ('agent.login')}}">Agent</a></button>
                                    <button type="button" class="btn btn-dim btn-outline-primary"><a href="{{route ('admin.login')}}">Administrator</a></button>
                                </div>

                                </br>
                                </br>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input type="text" name="email" class="form-control form-control-lg ufemail" id="default-01" placeholder="Enter your Email Address">
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="{{route ('password.request')}}">Forgot Password?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your Password">
                                        </div>
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form><!-- form -->
                                <div class="text-center form-note-s2 pt-4"> New on our platform? <a href="{{route ('client.register')}}">Create an account</a>
                                </div>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-4">
                                    <a href="{{ url('auth/google') }}" class="btn btn-round btn-dark"><em class="icon ni ni-google"></em><span>SIGN IN WITH GOOGLE</span> </a>
                                </ul>
                            </div><!-- .nk-block -->
                            <div class="text-center nk-block nk-auth-footer">
                                <div class="mt-3">
                                    <p>&copy; 2021 xFusion. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('./admin/images/slides/cdashboard.png') }}" srcset="{{ asset('./admin/images/slides/cdashboard2x.png 2x') }}" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashboard</h4>
                                                <p>Get Insights on how your account is performing, on one Dashboard you can measure the performance of your account. </p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('./admin/images/slides/payments.png') }}" srcset="{{ asset('./admin/images/slides/payments2x.png 2x') }}" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Payments</h4>
                                                <p>You can make Secure Payments Directly from the App so you never have to fall behind on your payments.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('./admin/images/slides/scale.png') }}" srcset="{{ asset('./admin/images/slides/scale2x.png 2x') }}" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Flexible</h4>
                                                <p>Tune Up or Tune Down your service directly from the app, the power is in your hands.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

@include('admin/layouts/footer_scripts')
    {{--<script>--}}
        {{--$('.ufemail').keyup(function() {--}}
            {{--var caps = jQuery('.ufemail').val();--}}
            {{--caps = caps.charAt(0).toUpperCase() + caps.slice(1);--}}
            {{--jQuery('.ufemail').val(caps);--}}
        {{--});--}}
    {{--</script>--}}