@include('admin/layouts/head')
<?php
Session::put('role', 'Admin');
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
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                            <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                        </div>
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="http://localhost:8000/./admin/images/logo-small.png" srcset="http://localhost:8000/./admin/images/logo-small2x.png 2x " alt="logo">
                                    <img class="logo-dark logo-img" src="http://localhost:8000/./admin/images/logo-dark-small.png" srcset="http://localhost:8000/./admin/images/logo-dark-small2x.png 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Register</h5>
                                </div>
                            </div><!-- .nk-block-head -->
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <input type="hidden" name="role" value="Admin">
                                <div class="form-group">
                                    <label class="form-label" for="name">Full Name</label>
                                    <input style="text-transform: capitalize;" type="text" class="form-control form-control-lg fullname" name="name" id="name" placeholder="Enter your Full name" value="{{ old('name') }}">
                                    <span class ="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" class="form-control form-control-lg ufemail" id="email" name="email" placeholder="Enter your Email Address" value="{{ old('email')}}">
                                    <span class ="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="Password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" name="password" id="Password" placeholder="Enter your Password">
                                        <span class ="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Confirm Password</label>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password_confirmation">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" id="password-confirm" name="password_confirmation" placeholder="Enter your Password">
                                        <span class ="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsandconditions" name="termsandconditions" required>
                                        <label class="custom-control-label" for="termsandconditions">I agree to xFusion <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                                    </div>
                                    </br>
                                    <span class ="text-danger">@error('termsandconditions'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                                </div>
                            </form>
                            <!-- form -->

                            <div class="form-note-s2 pt-4"> Already have an account ? <a href="{{route ('admin.login')}}"><strong>Sign in instead</strong></a>
                            </div>
                            <div class="text-center pt-4 pb-3">
                                <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                            </div>
                            <ul class="nav justify-center gx-4">
                                <a href="{{ url('auth/google') }}" class="btn btn-round btn-dark"><em class="icon ni ni-google"></em><span>SIGN UP WITH GOOGLE</span> </a>
                            </ul>
                            </ul>
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-auth-footer">
                            <div class="nk-block-between">
                                <ul class="nav nav-sm">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help</a>
                                    </li>
                                </ul><!-- nav -->
                            </div>
                            <div class="mt-3">
                                <p>&copy; 2021 xFusion. All Rights Reserved.</p>
                            </div>
                        </div><!-- nk-block -->
                    </div><!-- nk-split-content -->
                    <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- nk-split-content -->
                </div><!-- nk-split -->
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