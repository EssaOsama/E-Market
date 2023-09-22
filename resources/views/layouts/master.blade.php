<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    @include('layouts.css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


    <body
        class="vertical-layout vertical-menu-modern content-detached-left-sidebar ecommerce-application navbar-floating footer-static  "
        data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-left-sidebar">

        @include('layouts.header')


        @include('layouts.sidebar')
        
        @include('layouts.message_error')

        <!-- BEGIN: Content-->
        @yield('content')
        <!-- END: Content-->


        @include('layouts.footer')


        @include('layouts.scripts')

    </body>
    <!-- END: Body-->

</html>