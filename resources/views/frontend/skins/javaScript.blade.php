<!-- JS Global -->
<script src="{{ asset('public/frontend/assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/superfish/js/superfish.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/owl-carousel2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/jquery.sticky.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/jquery.easing.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/jquery.smoothscroll.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/plugins/smooth-scrollbar.min.js') }}"></script>

<!-- JS Page Level -->
<script src="{{ asset('public/frontend/assets/js/theme.js') }}"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
{{--<script src="{{ asset('public/frontend/assets/plugins/jquery.cookie.js') }}"></script>--}}
{{--<script src="{{ asset('public/frontend/assets/js/theme-config.js') }}"></script>--}}
<!--<![endif]-->
@yield('js_customer')
@yield('js_button')
@yield('js_content')