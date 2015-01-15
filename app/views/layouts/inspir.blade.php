<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    @yield('title')

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-override.css" rel="stylesheet">
    @yield('styling')
</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            @yield('user-details')
                        </div>
                        <div class="logo-element logo-face">
                            <img src="img/logo-face.png">
                        </div>
                    </li>
                    @yield('navbar-contents')
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">BoardBaby: Celebrate your Baby!</span>
                        </li>
                        <li class="dropdown">
                            @yield('notifications')
                        </li>
                        <li>
                            <a href="/logout">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row wrapper border-bottom white-bg page-heading"> <!-- BreadCrumb Menu -->
                @yield('content-head')

            </div> <!-- Bread Crumb Menu -->

            <div class="row"> <!-- Main Content-->
                @yield('content')
            </div> <!-- Main Content -->
            <div class="footer">
                <div>
                    <strong>Copyright</strong> Intuitive Inventions LLC &copy; 2015
                </div>
            </div>
        </div> <!-- Page Wrapper -->
    </div> <!-- Main Wrapper -->

    <!-- Mainly scripts -->
    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>


</body>

</html>
