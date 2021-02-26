<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')
        <!-- Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

           @yield('content')
        </div>
        <!-- /.content-wrapper -->


        @include('layouts.partials.footer')
    </div>
    <!-- ./wrapper -->
    @include('layouts.partials.footer-script')

</body>

</html>