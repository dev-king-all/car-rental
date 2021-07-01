@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')
<style>
    /*! CSS Used from: https://dashlite.net/demo5/assets/css/dashlite.css?ver=2.5.0 */
    *,*::before,*::after{box-sizing:border-box;}
    h5{margin-top:0;margin-bottom:.5rem;}
    ul{margin-top:0;margin-bottom:1rem;}
    strong{font-weight:bolder;}
    a{color:#3a8dfe;text-decoration:none;background-color:transparent;}
    a:hover{color:#0770fe;text-decoration:underline;}
    label{display:inline-block;margin-bottom:16px;}
    input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
    input{overflow:visible;}
    h5{margin-bottom:.5rem;font-family:Nunito,sans-serif;font-weight:700;line-height:1.1;color:#364a63;}
    h5{font-size:1.15rem;}
    .form-group{margin-bottom:1rem;}
    .btn{display:inline-block;font-family:Nunito,sans-serif;font-weight:700;color:#526484;text-align:center;vertical-align:middle;user-select:none;background-color:transparent;border:1px solid transparent;padding:.4375rem 1.125rem;font-size:.8125rem;line-height:1.25rem;border-radius:4px;transition:color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;}
    @media (prefers-reduced-motion: reduce){
        .btn{transition:none;}
    }
    .btn:hover{color:#526484;text-decoration:none;}
    .btn:focus{outline:0;box-shadow:0 0 0 3px rgba(9,113,254,0.1);}
    .btn:disabled{opacity:.5;}
    .btn-primary{color:#fff;background-color:#0971fe;border-color:#0971fe;}
    .btn-primary:hover{color:#fff;background-color:#0160e0;border-color:#015ad3;}
    .btn-primary:focus{color:#fff;background-color:#0160e0;border-color:#015ad3;box-shadow:0 0 0 .2rem rgba(46,134,254,0.5);}
    .btn-primary:disabled{color:#fff;background-color:#0971fe;border-color:#0971fe;}
    .btn-lg{padding:.6875rem 1.5rem;font-size:.9375rem;line-height:1.25rem;border-radius:5px;}
    .dropdown{position:relative;}
    /*.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;text-align:left;min-width:180px;padding:0 0;margin:.125rem 0 0;font-size:.8125rem;color:#526484;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #e5e9f2;border-radius:4px;}*/
    .close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5;}
    .close:hover{color:#000;text-decoration:none;}
    .modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:0 solid rgba(0,0,0,0);border-radius:5px;outline:0;}
    .modal-body{position:relative;flex:1 1 auto;padding:1.25rem;}
    .pt-3{padding-top:1rem!important;}
    .text-center{text-align:center!important;}
    @media print{
        *,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
        a:not(.btn){text-decoration:underline;}
    }
    ul{list-style:none;margin:0;padding:0;}
    a{transition:color .4s, background-color .4s, border .4s, box-shadow .4s;}
    a:focus{outline:none;}
    strong{font-weight:500;}
    h5{letter-spacing:-0.01em;}
    @media (min-width: 992px){
        h5{font-size:1.25rem;}
    }
    .link{display:inline-flex;align-items:center;font-size:0.85rem;font-weight:500;font-family:Roboto,sans-serif;line-height:1;border:none;background:transparent;transition:all .3s ease;white-space:nowrap;}
    .link:focus{box-shadow:none;outline:none;}
    .link-danger{color:#e85347!important;}
    .link-danger:hover{color:#526484!important;}
    .btn{position:relative;letter-spacing:0.02em;display:inline-flex;align-items:center;}
    .dropdown{display:inline-flex;}
    /*.dropdown-menu{overflow:hidden;border:1px solid #e5e9f2;box-shadow:0 3px 12px 1px rgba(11,49,117,0.15);}*/
    [class*="dropdown-indicator"]:after{border:none!important;font-family:"Nioicon";vertical-align:middle;content:"";margin-left:0.25rem;line-height:1;display:inline-flex;align-items:center;font-size:14px;}
    /*.dropdown-menu-auto{min-width:100%;max-width:100%;}*/
    /*.dropdown-menu-mxh{max-height:400px;overflow:auto;}*/
    .form-label{font-size:0.875rem;font-weight:500;color:#344357;margin-bottom:.5rem;}
    .form-label-group{display:flex;align-items:center;justify-content:space-between;margin-bottom:.5rem;}
    .form-label-group .form-label{margin-bottom:0;}
    .form-group{position:relative;margin-bottom:1.25rem;}
    label{cursor:pointer;}
    .modal-content{position:relative;min-height:40px;box-shadow:0px 0px 1px 0px rgba(82,100,132,0.2),0px 8px 15.52px 0.48px rgba(28,43,70,0.15);}
    .modal-content>.close{position:absolute;top:.75rem;right:.75rem;height:2.25rem;width:2.25rem;display:inline-flex;justify-content:center;align-items:center;color:#526484;z-index:1;transition:all .3s;}
    .modal-body-lg{padding:2.25rem 1.25rem;}
    @media (min-width: 576px){
        .modal-body{padding:1.5rem 1.5rem;}
        .modal-body-lg{padding:3.75rem 3.75rem;}
    }
    .ni{font-family:"Nioicon"!important;speak:never;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
    .ni-sign-btc-alt:before{content:"";}
    .ni-sign-eth-alt:before{content:"";}
    .ni-cross-sm:before{content:"";}
    .ni-paypal-alt:before{content:"";}
    a:hover{text-decoration:none;}
    .caption-text{font-size:16px;font-weight:400;line-height:1.3;letter-spacing:-0.01em;}
    .caption-text+.sub-text-sm{margin-top:0.5rem;display:block;}
    .sub-text-sm{font-size:12px;}
    .sub-text-sm{color:#8094ae;}
    [data-toggle="modal"]{cursor:pointer;}
    .nk-block-head{position:relative;padding-bottom:1.25rem;}
    .nk-block-head-xs{padding-bottom:.75rem;}
    .nk-block-head .nk-block-text{margin-top:1.5rem;}
    .coin-item{display:flex;align-items:center;padding:16px 20px;}
    .coin-icon{display:inline-flex;flex-shrink:0;}
    .coin-icon .icon{font-size:31px;height:32px;width:32px;color:#8094ae;}
    .coin-btc .coin-icon .icon{color:#f9841e;}
    .coin-icon+.coin-info{margin-left:12px;}
    .coin-name{font-size:14px;color:#364a63;display:block;}
    .coin-text{font-size:12px;color:#8094ae;display:block;}
    .buysell-cc-dropdown{width:100%;}
    .buysell-cc-dropdown .dropdown-indicator:after{position:absolute;top:0;right:0;bottom:0;width:56px;font-size:24px;display:inline-flex;align-items:center;justify-content:center;color:#8094ae;opacity:0.5;}
    .buysell-cc-dropdown .dropdown-menu{top:-78px!important;}
    .buysell-cc-item:not(:last-child){border-bottom:1px solid #e5e9f2;}
    .buysell-cc-chosen{display:block;width:100%;border:1px solid #dbdfea;border-radius:4px;background:#fff;}
    .buysell-cc-opt{display:block;}
    .buysell-overview{padding:1rem 0 1.5rem;}
    .buysell-overview-list{border:1px solid #dbdfea;border-radius:4px;}
    .buysell-overview-list+.sub-text-sm{margin-top:0.5rem;}
    .buysell-overview-item{position:relative;display:flex;align-items:center;justify-content:space-between;padding:16px;}
    .buysell-overview-item:not(:last-of-type){border-bottom:1px solid #e5e9f2;}
    .buysell-overview-item .pm-currency{align-items:center;display:flex;}
    .buysell-overview-item .pm-currency .icon{font-size:24px;margin-right:0.5rem;color:#8094ae;}
    .buysell-field:not(:last-child){margin-bottom:1.75rem;}
    .buysell-field.form-action{padding-top:.5rem;}
    .buysell-cc-choosen {
        display: block;
        width: 100%;
        border: 1px solid #dbdfea;
        border-radius: 4px;
        background: #fff;
    }
    /*! CSS Used fontfaces */
    @font-face{font-family:'Nunito';src:url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.eot");src:local("Nunito Regular"),local("Nunito-Regular"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.ttf") format("truetype");font-weight:normal;font-style:normal;}
    @font-face{font-family:'Nunito';src:url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.eot");src:local("Nunito Bold"),local("Nunito-Bold"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.ttf") format("truetype");font-weight:bold;font-style:normal;}
    @font-face{font-family:'Roboto';src:url("https://dashlite.net/demo5/assets/fonts/Roboto-Light.eot");src:local("Roboto Light"),local("Roboto-Light"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Light.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Light.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Light.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Light.ttf") format("truetype");font-weight:300;font-style:normal;}
    @font-face{font-family:'Roboto';src:url("https://dashlite.net/demo5/assets/fonts/Roboto-Regular.eot");src:local("Roboto"),local("Roboto-Regular"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Regular.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Regular.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Regular.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Regular.ttf") format("truetype");font-weight:normal;font-style:normal;}
    @font-face{font-family:'Roboto';src:url("https://dashlite.net/demo5/assets/fonts/Roboto-Medium.eot");src:local("Roboto Medium"),local("Roboto-Medium"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Medium.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Medium.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Medium.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Medium.ttf") format("truetype");font-weight:500;font-style:normal;}
    @font-face{font-family:'Roboto';src:url("https://dashlite.net/demo5/assets/fonts/Roboto-Bold.eot");src:local("Roboto Bold"),local("Roboto-Medium"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Bold.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Bold.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Bold.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Roboto-Bold.ttf") format("truetype");font-weight:700;font-style:normal;}
    @font-face{font-family:"Nioicon";src:url("https://dashlite.net/demo5/assets/fonts/Nioicon.eot");src:url("https://dashlite.net/demo5/assets/fonts/Nioicon.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Nioicon.ttf") format("truetype"),url("https://dashlite.net/demo5/assets/fonts/Nioicon.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Nioicon.svg#Nioicon") format("svg");font-weight:normal;font-style:normal;font-display:block;}


    /*//////dashboard*/

    /*! CSS Used from: https://dashlite.net/demo5/assets/css/dashlite.css?ver=2.5.0 */
    *,*::before,*::after{box-sizing:border-box;}
    h2{margin-top:0;margin-bottom:.5rem;}
    ul{margin-top:0;margin-bottom:1rem;}
    a{color:#3a8dfe;text-decoration:none;background-color:transparent;}
    a:hover{color:#0770fe;text-decoration:underline;}
    label{display:inline-block;margin-bottom:16px;}
    input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
    input{overflow:visible;}
    input[type="radio"]{box-sizing:border-box;padding:0;}
    h2{margin-bottom:.5rem;font-family:Nunito,sans-serif;font-weight:700;line-height:1.1;color:#364a63;}
    h2{font-size:1.75rem;}
    .container-xl{width:100%;padding-right:14px;padding-left:14px;margin-right:auto;margin-left:auto;}
    @media (min-width: 1200px){
        .container-xl{max-width:1140px;}
    }
    @media (min-width: 1540px){
        .container-xl{max-width:1440px;}
    }
    .form-control{display:block;width:100%;height:calc(2.125rem + 2px);padding:.4375rem 1rem;font-size:.8125rem;font-weight:400;line-height:1.25rem;color:#3c4d62;background-color:#fff;background-clip:padding-box;border:1px solid #dbdfea;border-radius:4px;transition:border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;}
    @media (prefers-reduced-motion: reduce){
        .form-control{transition:none;}
    }
    .form-control::-ms-expand{background-color:transparent;border:0;}
    .form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #3c4d62;}
    .form-control:focus{color:#3c4d62;background-color:#fff;border-color:#0971fe;outline:0;box-shadow:0 0 0 3px rgba(9,113,254,0.1);}
    .form-control::placeholder{color:#b6c6e3;opacity:1;}
    .form-control:disabled{background-color:#f5f6fa;opacity:1;}
    .form-control-lg{height:calc(2.625rem + 2px);padding:.6875rem 1rem;font-size:.9375rem;line-height:1.25rem;border-radius:5px;}
    .form-group{margin-bottom:1rem;}
    .btn{display:inline-block;font-family:Nunito,sans-serif;font-weight:700;color:#526484;text-align:center;vertical-align:middle;user-select:none;background-color:transparent;border:1px solid transparent;padding:.4375rem 1.125rem;font-size:.8125rem;line-height:1.25rem;border-radius:4px;transition:color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;}
    @media (prefers-reduced-motion: reduce){
        .btn{transition:none;}
    }
    .btn:hover{color:#526484;text-decoration:none;}
    .btn:focus{outline:0;box-shadow:0 0 0 3px rgba(9,113,254,0.1);}
    .btn:disabled{opacity:.5;}
    .btn-primary{color:#fff;background-color:#0971fe;border-color:#0971fe;}
    .btn-primary:hover{color:#fff;background-color:#0160e0;border-color:#015ad3;}
    .btn-primary:focus{color:#fff;background-color:#0160e0;border-color:#015ad3;box-shadow:0 0 0 .2rem rgba(46,134,254,0.5);}
    .btn-primary:disabled{color:#fff;background-color:#0971fe;border-color:#0971fe;}
    .btn-lg{padding:.6875rem 1.5rem;font-size:.9375rem;line-height:1.25rem;border-radius:5px;}
    .btn-block{display:block;width:100%;}
    .dropdown{position:relative;}
    /*.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;text-align:left;min-width:180px;padding:0 0;margin:.125rem 0 0;font-size:.8125rem;color:#526484;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid #e5e9f2;border-radius:4px;}*/
    /*.dropdown-menu-right{right:0;left:auto;}*/
    .nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
    .nav-link{display:block;padding:.5rem 1rem;}
    .nav-link:hover,.nav-link:focus{text-decoration:none;}
    .nav-tabs{border-bottom:1px solid #dee2e6;}
    .nav-tabs .nav-link{margin-bottom:-1px;border:1px solid transparent;border-top-left-radius:4px;border-top-right-radius:4px;}
    .nav-tabs .nav-link:hover,.nav-tabs .nav-link:focus{border-color:#e9ecef #e9ecef #dee2e6;}
    .m-auto{margin:auto!important;}
    .text-center{text-align:center!important;}
    @media print{
        *,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
        a:not(.btn){text-decoration:underline;}
        h2{orphans:3;widows:3;}
        h2{page-break-after:avoid;}
    }
    ul{list-style:none;margin:0;padding:0;}
    a{transition:color .4s, background-color .4s, border .4s, box-shadow .4s;}
    a:focus{outline:none;}
    h2:last-child{margin-bottom:0;}
    h2{letter-spacing:-0.03em;}
    @media (min-width: 992px){
        h2{font-size:2.5rem;letter-spacing:-0.03em;}
    }
    .text-base{color:#526484!important;}
    @media (min-width: 576px){
        .wide-xs{max-width:520px!important;}
    }
    @media (min-width: 1200px){
        .wide-lg{max-width:1140px!important;}
    }
    .btn{position:relative;letter-spacing:0.02em;display:inline-flex;align-items:center;}
    .btn-block{justify-content:center;}
    .dropdown{display:inline-flex;}
    /*.dropdown-menu{overflow:hidden;border:1px solid #e5e9f2;box-shadow:0 3px 12px 1px rgba(11,49,117,0.15);}*/
    [class*="dropdown-indicator"]:after{border:none!important;font-family:"Nioicon";vertical-align:middle;content:"";margin-left:0.25rem;line-height:1;display:inline-flex;align-items:center;font-size:14px;}
    .dropdown-indicator-caret:after{content:"";}
    /*.dropdown-menu-xxs{min-width:70px;max-width:70px;}*/
    /*.dropdown-menu-auto{min-width:100%;max-width:100%;}*/
    /*.dropdown-menu-mxh{max-height:400px;overflow:auto;}*/
    .form-label{font-size:0.875rem;font-weight:500;color:#344357;margin-bottom:.5rem;}
    .form-label-group{display:flex;align-items:center;justify-content:space-between;margin-bottom:.5rem;}
    .form-label-group .form-label{margin-bottom:0;}
    .form-note{font-size:12px;color:#8094ae;font-style:italic;display:block;}
    .form-note-alt{font-size:12px;color:#8094ae;}
    .form-note-group{display:flex;justify-content:space-between;margin-top:0.5rem;margin-bottom:-0.25rem;}
    .form-control-group{position:relative;}
    .form-control-number{font-size:20px;padding:20px;height:74px;}
    .form-group{position:relative;margin-bottom:1.25rem;}
    label{cursor:pointer;}
    input[type="radio"]:checked ~ label{cursor:default;}
    .nav{margin:-.5rem -1rem;}
    .nav .nav-link{display:inline-flex;align-items:center;}
    .nav-tabs{font-family:Nunito,sans-serif;margin:0;font-size:0.8125rem;border-bottom:1px solid #dbdfea;}
    .nav-tabs-s2{border-bottom:none;justify-content:center;}
    .nav-tabs .nav-item{padding-right:1.25rem;}
    .nav-tabs .nav-item:last-child{padding-right:0;}
    .nav-tabs .nav-item.active .nav-link{color:#0971fe;}
    .nav-tabs .nav-item.active .nav-link:after{opacity:1;}
    .nav-tabs .nav-link{padding:1rem 0;font-weight:700;color:#526484;position:relative;border:none;outline:none;display:inline-flex;align-items:center;}
    .nav-tabs .nav-link:hover{color:#364a63;}
    .nav-tabs .nav-link:focus{color:#0971fe;}
    .nav-tabs .nav-link:before,.nav-tabs .nav-link:after{position:absolute;content:'';}
    .nav-tabs .nav-link:after{left:0;right:0;bottom:0;height:3px;background:#0971fe;opacity:0;}
    @media (min-width: 768px){
        .nav-tabs .nav-item{padding-right:1.5rem;}
    }
    @media (min-width: 992px){
        .nav-tabs .nav-item{padding-right:1.75rem;}
        .nav-tabs .nav-link{font-size:0.875rem;}
    }
    @media (min-width: 1200px){
        .nav-tabs .nav-item{padding-right:2.25rem;}
    }
    .ni{font-family:"Nioicon"!important;speak:never;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
    .ni-sign-btc-alt:before{content:"";}
    .ni-sign-eth-alt:before{content:"";}
    .ni-cc-alt-fill:before{content:"";}
    .ni-building-fill:before{content:"";}
    .ni-paypal-alt:before{content:"";}
    .nk-content{padding:24px 4px;}
    @media (min-width: 576px){
        .nk-content{padding:32px 22px;}
        .nk-content-fluid{padding-left:22px;padding-right:22px;}
    }
    @media (min-width: 992px){
        .nk-content-fluid{padding-left:24px;padding-right:24px;}
    }
    @media (min-width: 1660px){
        .nk-content-fluid{padding-left:44px;padding-right:44px;}
    }
    .nk-content-body{flex-grow:1;}
    .nk-header-fixed+.nk-content{margin-top:65px;position:relative;}
    @media (min-width: 1540px){
        .nk-content-body{padding-top:1.5rem;padding-bottom:1.5rem;}
    }
    a:hover{text-decoration:none;}
    .link-list-plain li+li{border-top:1px solid #e5e9f2;}
    .link-list-plain a{display:flex;align-items:center;padding:.5rem 1.25rem;color:#526484;transition:all .4s;line-height:1.4rem;position:relative;}
    .link-list-plain a:hover{color:#0971fe;background:#f5f6fa;}
    .form-dropdown{position:absolute;right:0;top:0;bottom:0;padding:0 20px;display:inline-flex;align-items:center;justify-content:center;color:#8094ae;}
    .form-dropdown>div>span{margin:0 0.5rem;}
    .form-dropdown .dropdown>a{display:inline-flex;}
    [data-toggle="modal"]{cursor:pointer;}
    .coin-item{display:flex;align-items:center;padding:16px 20px;}
    .coin-icon{display:inline-flex;flex-shrink:0;}
    .coin-icon .icon{font-size:31px;height:32px;width:32px;color:#8094ae;}
    .coin-btc .coin-icon .icon{color:#f9841e;}
    .coin-icon+.coin-info{margin-left:12px;}
    .coin-name{font-size:14px;color:#364a63;display:block;}
    .coin-text{font-size:12px;color:#8094ae;display:block;}
    .buysell-title{margin-bottom:1.5rem;}
    .buysell-title .title{font-weight:400;}
    .buysell-nav{margin-bottom:2rem;}
    .buysell-cc-dropdown{width:100%;}
    .buysell-cc-dropdown .dropdown-indicator:after{position:absolute;top:0;right:0;bottom:0;width:56px;font-size:24px;display:inline-flex;align-items:center;justify-content:center;color:#8094ae;opacity:0.5;}
    .buysell-cc-dropdown .dropdown-menu{top:-78px!important;}
    .buysell-cc-item:not(:last-child){border-bottom:1px solid #e5e9f2;}
    .buysell-cc-choosen{display:block;width:100%;border:1px solid #dbdfea;border-radius:4px;background:#fff;}
    .buysell-cc-opt{display:block;}
    .buysell-pm-list{border:1px solid #dbdfea;background:#fff;border-radius:4px;}
    .buysell-pm-item{position:relative;}
    .buysell-pm-item:not(:last-child){border-bottom:1px solid #e5e9f2;}
    .buysell-pm-label{position:relative;display:flex;align-items:center;justify-content:space-between;margin-bottom:0;padding:16px 20px 16px 60px;cursor:pointer;}
    .buysell-pm-label:before,.buysell-pm-label:after{position:absolute;top:50%;left:20px;transform:translateY(-50%);height:24px;width:24px;border-radius:50%;}
    .buysell-pm-label:before{content:'';border:2px solid #dbdfea;}
    .buysell-pm-label:after{font-family:"Nioicon";content:"";display:inline-flex;align-items:center;justify-content:center;color:#fff;background:#0971fe;transition:opacity .3s;opacity:0;}
    .buysell-pm-label .pm-name{font-size:14px;color:#364a63;}
    .buysell-pm-label .pm-icon{display:inline-flex;font-size:24px;color:#8094ae;}
    .buysell-pm-control{position:absolute;top:0;height:1px;width:1px;opacity:0;}
    .buysell-pm-control:checked ~ .buysell-pm-label{cursor:default;}
    .buysell-pm-control:checked ~ .buysell-pm-label:after{opacity:1;}
    .buysell-field:not(:last-child){margin-bottom:1.75rem;}
    .buysell-field.form-action{padding-top:.5rem;}
    /*! CSS Used fontfaces */
    @font-face{font-family:'Nunito';src:url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.eot");src:local("Nunito Regular"),local("Nunito-Regular"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Regular.ttf") format("truetype");font-weight:normal;font-style:normal;}
    @font-face{font-family:'Nunito';src:url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.eot");src:local("Nunito Bold"),local("Nunito-Bold"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.woff2") format("woff2"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Nunito-Bold.ttf") format("truetype");font-weight:bold;font-style:normal;}
    @font-face{font-family:"Nioicon";src:url("https://dashlite.net/demo5/assets/fonts/Nioicon.eot");src:url("https://dashlite.net/demo5/assets/fonts/Nioicon.eot#iefix") format("embedded-opentype"),url("https://dashlite.net/demo5/assets/fonts/Nioicon.ttf") format("truetype"),url("https://dashlite.net/demo5/assets/fonts/Nioicon.woff") format("woff"),url("https://dashlite.net/demo5/assets/fonts/Nioicon.svg#Nioicon") format("svg");font-weight:normal;font-style:normal;font-display:block;}
</style>
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-lg-8">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-3">
                                    <div class="card-title">
                                        <h6 class="title">Leads Overview</h6>
                                        <p>Leads and Conversions fort the last 15 Days.
                                        </p>
                                    </div>
                                    <div class="card-tools mt-n1 mr-n1">
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                <em class="icon ni ni-more-h"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a href="#" class="active">
                                                            <span>15 Days</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>30 Days</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>3 Months</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-order-ovwg">
                                    <div class="row g-4 align-end">
                                        <div class="col-xxl-8">
                                            <div class="nk-order-ovwg-ck">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas class="order-overview-chart chartjs-render-monitor" id="orderOverview" style="display: block; height: 180px; width: 623px;" width="1246" height="360"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4">
                                            <div class="row g-4">
                                                <div class="col-sm-6 col-xxl-12">
                                                    <div class="nk-order-ovwg-data buy">
                                                        <div class="amount">120
                                                            <small class="currenct currency-usd">leads</small>
                                                        </div>
                                                        <div class="info">Last month
                                                            <strong><u>20</u>
                                                            </strong>Conversions
                                                        </div>
                                                        <div class="title">
                                                            <em class="icon ni ni-arrow-down-left"></em> DOWN 30%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xxl-12">
                                                    <div class="nk-order-ovwg-data sell">
                                                        <div class="amount">420
                                                            <small class="currenct currency-usd">Leads</small>
                                                        </div>
                                                        <div class="info">This month
                                                            <strong><u>39</u>
                                                                <span class="currenct currency-usd"></span>
                                                            </strong>Conversions
                                                        </div>
                                                        <div class="title">
                                                            <em class="icon ni ni-arrow-up-left"></em>UP 30%
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
                    <div class="col-lg-4">
                        <div class="card card-bordered h-100">
                            <div class="card-inner-group">
                                <div class="card-inner card-inner-md">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Upcoming Tasks</h6>
                                        </div>
                                        <div class="card-tools mr-n1">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false">
                                                    <em class="icon ni ni-more-h"></em>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#">
                                                                <em class="icon ni ni-setting"></em>
                                                                <span>View All</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="nk-wg-action">
                                        <div class="nk-wg-action-content">
                                            <em class="icon ni ni-cc-alt-fill"></em>
                                            <div class="title">Pending Client Invoices</div>
                                            <p>We have still
                                                <strong>40 Client Invoices</strong> and
                                                <strong>10 Clients</strong>, partially paid, <strong>30 haven't paid</strong>
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-trigger mr-n2">
                                            <em class="icon ni ni-forward-ios"></em>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="nk-wg-action">
                                        <div class="nk-wg-action-content">
                                            <em class="icon ni ni-mic"></em>
                                            <div class="title">Show Related</div>
                                            <p>Reminder to write down points on the upcoming show with
                                                <strong>James Saleskey</strong>
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-trigger mr-n2">
                                            <em class="icon ni ni-forward-ios"></em>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="nk-wg-action">
                                        <div class="nk-wg-action-content">
                                            <em class="icon ni ni-wallet-fill"></em>
                                            <div class="title">Upcoming Staff Payroll</div>
                                            <p>
                                                <strong>20 upcoming</strong> staff payments.
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-trigger mr-n2">
                                            <em class="icon ni ni-forward-ios"></em>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-xxl-8">
                        <div class="card card-bordered card-full">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">
                                            <span class="mr-2">Orders Activities</span>
                                            <a href="#" class="link d-none d-sm-inline">See History</a>
                                        </h6>
                                    </div>
                                    <div class="card-tools">
                                        <ul class="card-tools-nav">
                                            <li>
                                                <a href="#">
                                                    <span>Buy</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Sell</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <span>All</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner p-0 border-top">
                                <div class="nk-tb-list nk-tb-orders">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <span>Type</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span>Desc</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Date</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Time</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Ref</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
                                            <span>USD Amount</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
                                            <span>Amount</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <ul class="icon-overlap">
                                                <li>
                                                    <em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
                                                </li>
                                                <li>
                                                    <em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Buy Bitcoin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-sub">02/10/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">11:37 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub text-primary">RE2309232</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">4,565.75
												<span>USD</span>
											</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.2040
												<span>BTC</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <ul class="icon-overlap">
                                                <li>
                                                    <em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
                                                </li>
                                                <li>
                                                    <em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Buy Ethereum</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-sub">02/10/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">10:37 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub text-primary">RE2309232</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">2,039.39
												<span>USD</span>
											</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.12600
												<span>BTC</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <ul class="icon-overlap">
                                                <li>
                                                    <em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
                                                </li>
                                                <li>
                                                    <em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Sell Bitcoin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-sub">02/10/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">10:45 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub text-primary">RE2309232</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">9,285.71
												<span>USD</span>
											</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.94750
												<span>BTC</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <ul class="icon-overlap">
                                                <li>
                                                    <em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
                                                </li>
                                                <li>
                                                    <em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Sell Etherum</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-sub">02/11/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">10:25 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub text-primary">RE2309232</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">12,596.75
												<span>USD</span>
											</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 1.02050
												<span>BTC</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <ul class="icon-overlap">
                                                <li>
                                                    <em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
                                                </li>
                                                <li>
                                                    <em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Buy Bitcoin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-sub">02/10/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">10:12 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub text-primary">RE2309232</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">400.00
												<span>USD</span>
											</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.00056
												<span>BTC</span>
											</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-orders-type">
                                            <ul class="icon-overlap">
                                                <li>
                                                    <em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
                                                </li>
                                                <li>
                                                    <em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-lead">Sell Etherum</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-sub">02/09/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">05:15 PM</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub text-primary">RE2309232</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm text-right">
											<span class="tb-sub tb-amount">6,246.50
												<span>USD</span>
											</span>
                                        </div>
                                        <div class="nk-tb-col text-right">
											<span class="tb-sub tb-amount ">+ 0.02575
												<span>BTC</span>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner-sm border-top text-center d-sm-none">
                                <a href="#" class="btn btn-link btn-block">See History</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div class="row g-gs">
                            <div class="col-md-6 col-lg-12">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-2">
                                            <div class="card-title">
                                                <h6 class="title">Top Coin in Orders</h6>
                                                <p>In last 15 days buy and sells overview.</p>
                                            </div>
                                            <div class="card-tools mt-n1 mr-n1">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#" class="active">
                                                                    <span>15 Days</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>30 Days</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>3 Months</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-coin-ovwg">
                                            <div class="nk-coin-ovwg-ck">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas class="coin-overview-chart chartjs-render-monitor" id="coinOverview" style="display: block; height: 165px; width: 260px;" width="520" height="330"></canvas>
                                            </div>
                                            <ul class="nk-coin-ovwg-legends">
                                                <li>
                                                    <span class="dot dot-lg sq" data-bg="#f98c45" style="background: rgb(249, 140, 69) none repeat scroll 0% 0%;"></span>
                                                    <span>Bitcoin</span>
                                                </li>
                                                <li>
                                                    <span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;"></span>
                                                    <span>Ethereum</span>
                                                </li>
                                                <li>
                                                    <span class="dot dot-lg sq" data-bg="#8feac5" style="background: rgb(143, 234, 197) none repeat scroll 0% 0%;"></span>
                                                    <span>NioCoin</span>
                                                </li>
                                                <li>
                                                    <span class="dot dot-lg sq" data-bg="#6b79c8" style="background: rgb(107, 121, 200) none repeat scroll 0% 0%;"></span>
                                                    <span>Litecoin</span>
                                                </li>
                                                <li>
                                                    <span class="dot dot-lg sq" data-bg="#79f1dc" style="background: rgb(121, 241, 220) none repeat scroll 0% 0%;"></span>
                                                    <span>Bitcoin Cash</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-3">
                                            <div class="card-title">
                                                <h6 class="title">User Activities</h6>
                                                <p>In last 30 days
                                                    <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="" data-original-title="Referral Informations"></em>
                                                </p>
                                            </div>
                                            <div class="card-tools mt-n1 mr-n1">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#">
                                                                    <span>15 Days</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="active">
                                                                    <span>30 Days</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>3 Months</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-activity-group g-4">
                                            <div class="user-activity">
                                                <em class="icon ni ni-users"></em>
                                                <div class="info">
                                                    <span class="amount">345</span>
                                                    <span class="title">Direct Join</span>
                                                </div>
                                            </div>
                                            <div class="user-activity">
                                                <em class="icon ni ni-users"></em>
                                                <div class="info">
                                                    <span class="amount">49</span>
                                                    <span class="title">Referral Join</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-activity-ck">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="usera-activity-chart chartjs-render-monitor" id="userActivity" style="display: block; height: 102px; width: 396px;" width="792" height="204"></canvas>
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

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="buysell wide-xs m-auto">
                <div class="buysell-nav text-center">
                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                        <li class="nav-item">
                            <a class="nav-link active" href="html/crypto/buy-sell.html">Buy Coin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sell Coin</a>
                        </li>
                    </ul>
                </div><!-- .buysell-nav -->
                <div class="buysell-title text-center">
                    <h2 class="title">What do you want to buy!</h2>
                </div><!-- .buysell-title -->
                <div class="buysell-block">
                    <form action="#" class="buysell-form">
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label">Choose what you want to get</label>
                            </div>
                            <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency">
                            <div class="dropdown buysell-cc-dropdown">
                                <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                    <div class="coin-item coin-btc">
                                        <div class="coin-icon">
                                            <em class="icon ni ni-sign-btc-alt"></em>
                                        </div>
                                        <div class="coin-info">
                                            <span class="coin-name">Bitcoin (BTC)</span>
                                            <span class="coin-text">Last Order: Nov 23, 2019</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                    <ul class="buysell-cc-list">
                                        <li class="buysell-cc-item selected">
                                            <a href="#" class="buysell-cc-opt" data-currency="btc">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-sign-btc-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">Bitcoin (BTC)</span>
                                                        <span class="coin-text">Last Order: Nov 23, 2019</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="buysell-cc-item">
                                            <a href="#" class="buysell-cc-opt" data-currency="eth">
                                                <div class="coin-item coin-eth">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-sign-eth-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">Ethereum (ETH)</span>
                                                        <span class="coin-text">Not order yet!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- .dropdown-menu -->
                            </div><!-- .dropdown -->
                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="buysell-amount">Amount to Buy</label>
                            </div>
                            <div class="form-control-group">
                                <input type="text" class="form-control form-control-lg form-control-number" id="buysell-amount" name="bs-amount" placeholder="0.055960">
                                <div class="form-dropdown">
                                    <div class="text">BTC<span>/</span></div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-indicator-caret" data-toggle="dropdown" data-offset="0,2">USD</a>
                                        <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-right text-center">
                                            <ul class="link-list-plain">
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">CAD</a></li>
                                                <li><a href="#">YEN</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-note-group">
                                <span class="buysell-min form-note-alt">Minimum: 10.00 USD</span>
                                <span class="buysell-rate form-note-alt">1 USD = 0.000016 BTC</span>
                            </div>
                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label">Payment Method</label>
                            </div>
                            <div class="form-pm-group">
                                <ul class="buysell-pm-list">
                                    <li class="buysell-pm-item">
                                        <input class="buysell-pm-control" type="radio" name="bs-method" id="pm-paypal" />
                                        <label class="buysell-pm-label" for="pm-paypal">
                                            <span class="pm-name">PayPal</span>
                                            <span class="pm-icon"><em class="icon ni ni-paypal-alt"></em></span>
                                        </label>
                                    </li>
                                    <li class="buysell-pm-item">
                                        <input class="buysell-pm-control" type="radio" name="bs-method" id="pm-bank" />
                                        <label class="buysell-pm-label" for="pm-bank">
                                            <span class="pm-name">Bank Transfer</span>
                                            <span class="pm-icon"><em class="icon ni ni-building-fill"></em></span>
                                        </label>
                                    </li>
                                    <li class="buysell-pm-item">
                                        <input class="buysell-pm-control" type="radio" name="bs-method" id="pm-card" />
                                        <label class="buysell-pm-label" for="pm-card">
                                            <span class="pm-name">Credit / Debit Card</span>
                                            <span class="pm-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-action">
                            <a href="#" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#buy-coin">Continue to Buy</a>
                        </div><!-- .buysell-field -->
                        <div class="form-note text-base text-center">Note: our transfer fee included, <a href="#">see our fees</a>.</div>
                    </form><!-- .buysell-form -->
                </div><!-- .buysell-block -->
            </div><!-- .buysell -->
        </div>
    </div>
</div>
<!-- @@ Buy Coin Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <div class="nk-block-head nk-block-head-xs text-center">
                    <h5 class="nk-block-title">Confirm Order</h5>
                    <div class="nk-block-text">
                        <div class="caption-text">You are about to get <strong>0.5968</strong> BTC for <strong>500.00</strong> USD*</div>
                        <span class="sub-text-sm">Exchange rate: 1 BTC = 9,804.00 USD</span>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="buysell-overview">
                        <ul class="buysell-overview-list">
                            <li class="buysell-overview-item">
                                <span class="pm-title">Pay with</span>
                                <span class="pm-currency"><em class="icon ni ni-paypal-alt"></em> <span>PayPal</span></span>
                            </li>
                            <li class="buysell-overview-item">
                                <span class="pm-title">Total</span>
                                <span class="pm-currency">500.00 USD</span>
                            </li>
                        </ul>
                        <div class="sub-text-sm">* Our transaction fee are included. <a href="#">See transaction fee</a></div>
                    </div>
                    <div class="buysell-field form-group">
                        <div class="form-label-group">
                            <label class="form-label">Choose what you want to get</label>
                            <a href="#" class="link">Add Wallet</a>
                        </div>
                        <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency-modal">
                        <div class="dropdown buysell-cc-dropdown">
                            <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                <div class="coin-item coin-btc">
                                    <div class="coin-icon">
                                        <em class="icon ni ni-sign-btc-alt"></em>
                                    </div>
                                    <div class="coin-info">
                                        <span class="coin-name">BTC Wallet</span>
                                        <span class="coin-text">1X38 * * * * YW94</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                <ul class="buysell-cc-list">
                                    <li class="buysell-cc-item selected">
                                        <a href="#" class="buysell-cc-opt" data-currency="btc">
                                            <div class="coin-item coin-btc">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-sign-btc-alt"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">BTC Wallet</span>
                                                    <span class="coin-text">1X38 * * * * YW94</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li> <!-- .buysell-cc-item -->
                                    <li class="buysell-cc-item">
                                        <a href="#" class="buysell-cc-opt" data-currency="eth">
                                            <div class="coin-item coin-eth">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-sign-eth-alt"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">Ethereum (ETH)</span>
                                                    <span class="coin-text">Not order yet!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li> <!-- .buysell-cc-item -->
                                </ul>
                            </div>
                        </div><!-- .dropdown -->
                    </div><!-- .buysell-field -->
                    <div class="buysell-field form-action text-center">
                        <div>
                            <a href="#" class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#confirm-coin">Confirm the Order</a>
                        </div>
                        <div class="pt-3">
                            <a href="#" data-dismiss="modal" class="link link-danger">Cancel Order</a>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->
<!-- @@ Confirm Coin Modal @e -->

<!-- @@ Confirm Coin Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="confirm-coin">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Successfully sent payment!</h4>
                    <div class="nk-modal-text">
                        <p class="caption-text">You’ve successfully bought <strong>0.5968</strong> BTC for <strong>200.00</strong> USD.</p>
                        <p class="sub-text-sm">Learn when you reciveve bitcoin in your wallet. <a href="#"> Click here</a></p>
                    </div>
                    <div class="nk-modal-action-lg">
                        <ul class="btn-group gx-4">
                            <li><a href="{{ url('/') }}" class="btn btn-lg btn-mw btn-primary">Return</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-body -->
            <div class="modal-footer bg-lighter">
                <div class="text-center w-100">
                    <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>
                </div>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->
<!-- JavaScript -->

<!-- content @e -->
@include('admin/layouts/footer_scripts')
