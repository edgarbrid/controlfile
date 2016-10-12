<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Dashboard</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('back/images/icons/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('back/images/icons/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('back/images/icons/favicon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="i{{asset('back/mages/icons/favicon-114x114.png')}}">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/main.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/style-responsive.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/zabuto_calendar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('back/styles/jquery.news-ticker.css')}}">
    <script src="{{asset('back/script/jquery.min.js')}}"></script>
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Control File</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Buscar..." class="form-control text-white"/></div>
                </form>
                @section('usuario')
                
                @show
            </div>
        </nav>
            
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li class="active"><a href="{{{action('UserController@getIndex')}}}"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Inicio</span></a></li>
                    <li><a href=""><i class="fa fa-calendar fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Historial</span></a>
                      
                    </li>
                    <li><a href="{{action('LoginController@getSalir')}}"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Salir</span></a>
                       
                    </li>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">@yield('pagina')</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        
                    @section('ppal')
                        
                        </div>
                    @show
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href=""><?php echo date('Y'); ?> © Nombre del programa</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    
    <script src="{{asset('back/script/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('back/script/jquery-ui.js')}}"></script>
    <script src="{{asset('back/script/bootstrap.min.js')}}"></script>
    <script src="{{asset('back/script/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('back/script/html5shiv.js')}}"></script>
    <script src="{{asset('back/script/respond.min.js')}}"></script>
    <script src="{{asset('back/script/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('back/script/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('back/script/jquery.cookie.js')}}"></script>
    <script src="{{asset('back/script/icheck.min.js')}}"></script>
    <script src="{{asset('back/script/custom.min.js')}}"></script>
    <script src="{{asset('back/script/jquery.inputmask.js')}}"></script>
    
    <script src="{{asset('back/script/jquery.menu.js')}}"></script>
    <script src="{{asset('back/script/pace.min.js')}}"></script>
    <script src="{{asset('back/script/holder.js')}}"></script>
    <script src="{{asset('back/script/responsive-tabs.js')}}"></script>
    
    <script src="{{asset('back/script/zabuto_calendar.min.js')}}"></script>
    <script src="{{asset('back/script/index.js')}}"></script>
    <script src="{{asset('back/script/adeco.js')}}"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    
    <!--CORE JAVASCRIPT-->
    <script src="{{asset('back/script/main.js')}}"></script>
</body>
</html>
