<!doctype html>
<html class="loading" lang="en" data-textdirection="ltr">
<!--Head Part-->
<head>
    @include('panels/head')
</head>

<!--Body Part-->
<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- navbar content -->
    <div class="container">
        <header class="row">
            @include('panels/header')
        </header>
    </div>
    

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('panels/sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-12">
            @yield('content')
        </div>

    </div>

    <!-- footer content -->
    @include('panels/footer')

    @include('panels/script')
</body>
</html>