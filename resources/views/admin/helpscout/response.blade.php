@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')
<style>
    /*! CSS Used from: https://dashlite.net/demo6/assets/css/dashlite.css?ver=2.7.0 */
    *, *::before, *::after {
        box-sizing: border-box;
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    small {
        font-size: 80%;
    }

    small {
        font-size: 85%;
        font-weight: 400;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -14px;
        margin-left: -14px;
    }

    .col-md-6, .col-lg-4 {
        position: relative;
        width: 100%;
        padding-right: 14px;
        padding-left: 14px;
    }

    @media (min-width: 768px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (min-width: 992px) {
        .col-lg-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .offset-lg-2 {
            margin-left: 16.66667%;
        }
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 4px;
    }

    @media (min-width: 992px) {
        .flex-lg-nowrap {
            flex-wrap: nowrap !important;
        }
    }

    @media (min-width: 768px) {
        .pl-md-3 {
            padding-left: 1rem !important;
        }
    }

    @media print {
        *, *::before, *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .text-soft {
        color: #8094ae !important;
    }

    .card-bordered {
        border: 1px solid #dbdfea;
    }

    .card-inner {
        padding: 1.25rem;
    }

    @media (min-width: 576px) {
        .card-inner {
            padding: 1.5rem;
        }
    }

    .ni {
        font-family: "Nioicon" !important;
        speak: never;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .ni-plus:before {
        content: "";
    }

    .ni-info-fill:before {
        content: "";
    }

    .gx-4 {
        margin-left: -.75rem !important;
        margin-right: -.75rem !important;
    }

    .gx-4 > div {
        padding-left: .75rem !important;
        padding-right: .75rem !important;
    }

    .gy-gs {
        margin-top: -14px !important;
        margin-bottom: -14px !important;
    }

    .gy-gs > div {
        padding-top: 14px !important;
        padding-bottom: 14px !important;
    }

    .lead-text {
        font-size: 0.875rem;
        font-weight: 700;
        color: #364a63;
        display: block;
    }

    .lead-text span {
        color: #526484;
        font-weight: 400;
    }

    .sub-text {
        display: block;
        font-size: 13px;
        color: #8094ae;
    }

    .nk-iv-wg3-group {
        display: flex;
        align-items: flex-end;
        flex-wrap: wrap;
    }

    .nk-iv-wg3-sub {
        font-size: .875rem;
        color: #8094ae;
        margin-top: .125rem;
    }

    .nk-iv-wg3-sub .icon {
        font-size: .75rem;
    }

    .nk-iv-wg3-plus {
        position: absolute;
    }

    .nk-iv-wg3-plus .icon {
        font-size: 1rem;
        line-height: 1.5rem;
    }

    .nk-iv-wg3-plus ~ * {
        padding-left: 24px;
    }

    .nk-iv-wg3-amount .number {
        font-size: 1.25rem;
        font-weight: 700;
        color: #364a63;
        line-height: 1.5rem;
        white-space: nowrap;
    }

    .nk-iv-wg3-amount .number .number-up, .nk-iv-wg3-amount .number .number-down {
        font-size: 50%;
    }

    .nk-iv-wg3-amount .number .number-down .icon {
        color: #526484;
    }

    .nk-iv-wg3-amount .number .number-up:before, .nk-iv-wg3-amount .number .number-down:before {
        font-family: "Nioicon";
    }

    .nk-iv-wg3-amount .number .number-up {
        color: #1ee0ac;
    }

    .nk-iv-wg3-amount .number .number-up:before {
        content: "";
    }

    .nk-iv-wg3-amount .number .number-down {
        color: #e85347;
    }

    .nk-iv-wg3-amount .number .number-down:before {
        content: "";
    }

    .nk-iv-wg3-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: .5rem 1.25rem;
        border-bottom: 1px solid #e5e9f2;
    }

    .nk-iv-wg3-list li .lead-text {
        font-size: 13px;
        font-weight: 400;
    }

    .nk-iv-wg3-list:last-child {
        padding: 0 0 1rem;
    }

    .nk-iv-wg3-list:last-child li:last-child {
        border-bottom: none;
    }

    @media (max-width: 991.98px) {
        .nk-iv-wg3-sub:first-child {
            min-width: 160px;
        }
    }

    @media (max-width: 420px) {
        .nk-iv-wg3-sub {
            width: 100%;
        }

        .nk-iv-wg3-plus {
            margin-bottom: .75rem;
            display: inline-block;
        }

        .nk-iv-wg3-plus .icon {
            font-size: 1.5rem;
            line-height: 2.25rem;
        }

        .nk-iv-wg3-plus ~ * {
            padding-left: 0;
        }

        .nk-iv-wg3-plus + * {
            padding-top: 40px;
        }
    }

    @media (min-width: 576px) {
        .nk-iv-wg3-list li {
            padding: .5rem 1.75rem;
        }
    }

    @media (min-width: 680px) and (max-width: 991px) {
        .nk-iv-wg3-list {
            display: flex;
            flex-wrap: wrap;
        }

        .nk-iv-wg3-list li {
            width: 50%;
        }

        .nk-iv-wg3-list li:last-child {
            border-bottom: 1px solid #e5e9f2;
        }

        .nk-iv-wg3-list:last-child li:nth-last-child(2) {
            border-bottom: none;
        }
    }

    @media (min-width: 992px) {
        .nk-iv-wg3-list {
            width: 33.333333%;
            float: left;
        }

        .nk-iv-wg3-list li:last-child {
            border-bottom: none;
        }
    }

    @media (min-width: 1200px) {
        .nk-iv-wg3-amount .number {
            font-size: 1.75rem;
            line-height: 2.25rem;
            font-weight: 500;
        }

        .nk-iv-wg3-plus .icon {
            font-size: 1.25rem;
            line-height: 2.25rem;
        }

        .nk-iv-wg3-plus ~ * {
            padding-left: 32px;
        }
    }
</style>
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">


<!-- content @s -->

<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="row gy-gs">
                <div class="col-md-6">
                    <div class="nk-iv-wg3">
                        <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                            <div class="nk-iv-wg3-sub">
                                <div class="nk-iv-wg3-amount">
                                    <div class="number">2,500.00</div>
                                </div>
                                <div class="nk-iv-wg3-subtitle">Invested Amount</div>
                            </div>
                            <div class="nk-iv-wg3-sub"><span class="nk-iv-wg3-plus text-soft"><em
                                            class="icon ni ni-plus"></em></span>
                                <div class="nk-iv-wg3-amount">
                                    <div class="number">1,643.76 <span class="number-up">4.76 %</span></div>
                                </div>
                                <div class="nk-iv-wg3-subtitle">Profit Earned</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-2">
                    <div class="nk-iv-wg3 pl-md-3">
                        <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                            <div class="nk-iv-wg3-sub">
                                <div class="nk-iv-wg3-amount">
                                    <div class="number">4,999.90 <span class="number-down">1017.14 <em
                                                    class="icon ni ni-info-fill" data-toggle="tooltip"
                                                    data-placement="right" title=""
                                                    data-original-title="tooltip text"></em></span></div>
                                </div>
                                <div class="nk-iv-wg3-subtitle">Total Return</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="schemeDetails" class="nk-iv-scheme-details">
            <ul class="nk-iv-wg3-list">
                <li>
                    <div class="sub-text">Id</div>
                    <div class="lead-text">21 Days</div>
                    <div class="lead-text">21 Days</div>
                    <div class="lead-text">21 Days</div>
                    <div class="lead-text">21 Days</div>
                </li>
                <li>
                    <div class="sub-text">Term start at</div>
                    <div class="lead-text">Nov 4, 2019 05:42 AM</div>
                </li>
                <li>
                    <div class="sub-text">Term end at</div>
                    <div class="lead-text">Nov 25, 2019 05:42 AM</div>
                </li>
                <li>
                    <div class="sub-text">Daily interest</div>
                    <div class="lead-text">4.76%</div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- content @e -->


@include('admin/layouts/footer_scripts')
