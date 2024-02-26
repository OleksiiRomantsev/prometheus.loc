<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('layoutParts.head')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu horizontal-menu-padding material-horizontal-layout material-layout 2-columns" data-open="click" data-menu="horizontal-menu" data-col="2-columns">

<!-- BEGIN: Header-->
@include('layoutParts.nav')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('layoutParts.mainmenu')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content container center-layout mt-2">
    @include('layoutParts.top-page')
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
{{--<footer class="footer footer-transparent footer-light navbar-shadow">--}}
{{--    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">--}}
{{--        <span class="float-md-left d-block d-md-inline-block">Copyright &copy; <?=date("Y")?>--}}

{{--        </span>--}}
{{--    </p>--}}
{{--</footer>--}}
<!-- END: Footer-->

@include('layoutParts.modal')
@include('layoutParts.scripts')
@yield('script')
</body>
<!-- END: Body-->

</html>
