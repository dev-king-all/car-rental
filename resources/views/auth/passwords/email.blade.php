@include('admin/layouts/head')

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
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Reset password</h5>
                                    <div class="nk-block-des">
                                        <p>Please enter the Email you used to register at xFusion and we will be happy to send you a reset password link. :) </p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('password.email') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email</label>
                                        <a class="link link-primary link-sm" href="#">Need Help?</a>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </form><!-- form -->
                            <div class="form-note-s2 pt-5">
                                <a href="{{route ('login')}}"><strong>Return to login</strong></a>
                            </div>
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
                                </ul><!-- .nav -->
                            </div>
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
                                            <img class="round" src="{{ asset('./admin/images/slides/promo-a.png') }}" srcset="{{ asset('./admin/images/slides/promo-a2x.png 2x') }}" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>Dashlite</h4>
                                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="{{ asset('./admin/images/slides/promo-b.png') }}" srcset="{{ asset('./admin/images/slides/promo-b2x.png 2x') }}" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>Dashlite</h4>
                                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="{{ asset('./admin/images/slides/promo-b.png') }}" srcset="{{ asset('./admin/images/slides/promo-b2x.png 2x') }}" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>Dashlite</h4>
                                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
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

@include('admin/layouts/footer_scripts')
