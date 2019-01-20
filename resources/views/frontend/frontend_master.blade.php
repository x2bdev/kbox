<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.skins.meta')
    @include('frontend.skins.styleSheet')
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
{{--<div id="preloader">--}}
    {{--<div id="preloader-status">--}}
        {{--<div class="spinner">--}}
            {{--<div class="rect1"></div>--}}
            {{--<div class="rect2"></div>--}}
            {{--<div class="rect3"></div>--}}
            {{--<div class="rect4"></div>--}}
            {{--<div class="rect5"></div>--}}
        {{--</div>--}}
        {{--<div id="preloader-title">Loading</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="wrapper">
    @include('frontend.layouts.popup_cart')
    @include('frontend.layouts.header_top')
    @include('frontend.layouts.header')
    @yield('contents')
    @include('frontend.layouts.footer')
    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
</div>
@include('frontend.skins.javaScript')
</body>
</html>