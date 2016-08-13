<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Minilab</title>
        <link rel="icon" type="image/ico" href="/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="/css/vendor/animate.css">
        <link rel="stylesheet" href="/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="/js/vendor/rickshaw/rickshaw.min.css">
        <link rel="stylesheet" href="/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="/js/vendor/summernote/summernote.css">


        <!-- project main css files -->
        <link rel="stylesheet" href="/css/main.css">
        {{HTML::style('/css/style.css')}}



        <!--/ stylesheets -->




        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->


        @yield('head')

    </head>




    {{Auth::user()->layout}}
    <body id="minovate" class="appWrapper ">






        <!--[if lt IE 8]>
            <p class="browserupgrade">Вы используете браузер, который <strong>устарел</strong>. Пожалуйста <a href="http://browsehappy.com/">обновите свой браузер</a> чтобы увеличить производительность и получить доступ к новым возможностям.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">






            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="/">
                            <span><strong>MINI</strong>LAB</span>
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->



                    <!-- Left-side navigation -->
                    <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a href="#" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                        <li class="dropdown divided-right settings">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu with-arrow animated littleFadeInUp" role="menu">
                                <li>

                                    <ul class="color-schemes list-inline">
                                        <li class="title">Header Color:</li>
                                        <li><a href="#" class="scheme-drank header-scheme" data-scheme="scheme-default"></a></li>
                                        <li><a href="#" class="scheme-black header-scheme" data-scheme="scheme-black"></a></li>
                                        <li><a href="#" class="scheme-greensea header-scheme" data-scheme="scheme-greensea"></a></li>
                                        <li><a href="#" class="scheme-cyan header-scheme" data-scheme="scheme-cyan"></a></li>
                                        <li><a href="#" class="scheme-lightred header-scheme" data-scheme="scheme-lightred"></a></li>
                                        <li><a href="#" class="scheme-light header-scheme" data-scheme="scheme-light"></a></li>
                                        <li class="title">Branding Color:</li>
                                        <li><a href="#" class="scheme-drank branding-scheme" data-scheme="scheme-default"></a></li>
                                        <li><a href="#" class="scheme-black branding-scheme" data-scheme="scheme-black"></a></li>
                                        <li><a href="#" class="scheme-greensea branding-scheme" data-scheme="scheme-greensea"></a></li>
                                        <li><a href="#" class="scheme-cyan branding-scheme" data-scheme="scheme-cyan"></a></li>
                                        <li><a href="#" class="scheme-lightred branding-scheme" data-scheme="scheme-lightred"></a></li>
                                        <li><a href="#" class="scheme-light branding-scheme" data-scheme="scheme-light"></a></li>
                                        <li class="title">Sidebar Color:</li>
                                        <li><a href="#" class="scheme-drank sidebar-scheme" data-scheme="scheme-default"></a></li>
                                        <li><a href="#" class="scheme-black sidebar-scheme" data-scheme="scheme-black"></a></li>
                                        <li><a href="#" class="scheme-greensea sidebar-scheme" data-scheme="scheme-greensea"></a></li>
                                        <li><a href="#" class="scheme-cyan sidebar-scheme" data-scheme="scheme-cyan"></a></li>
                                        <li><a href="#" class="scheme-lightred sidebar-scheme" data-scheme="scheme-lightred"></a></li>
                                        <li><a href="#" class="scheme-light sidebar-scheme" data-scheme="scheme-light"></a></li>
                                        <li class="title">Active Color:</li>
                                        <li><a href="#" class="scheme-drank color-scheme" data-scheme="drank-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-black color-scheme" data-scheme="black-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-greensea color-scheme" data-scheme="greensea-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-cyan color-scheme" data-scheme="cyan-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-lightred color-scheme" data-scheme="lightred-scheme-color"></a></li>
                                        <li><a href="#" class="scheme-light color-scheme" data-scheme="light-scheme-color"></a></li>
                                    </ul>

                                </li>

                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-xs-8 control-label">Fixed header</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch lightred small">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="fixed-header" checked="">
                                                    <label class="onoffswitch-label" for="fixed-header">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-xs-8 control-label">Fixed aside</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch lightred small">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="fixed-aside" checked="">
                                                    <label class="onoffswitch-label" for="fixed-aside">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Left-side navigation end -->




                    <!-- Search -->
                    <div class="search" id="main-search">
                        <input type="text" class="form-control underline-input" id="quicksearch" placeholder="Поиск...">
                        <div id="searchresultmenu" class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInUp" role="menu">

                            

                        </div>
                    </div>
                    <!-- Search end -->




                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                        <!--<li class="dropdown users">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="badge bg-lightred">2</span>
                            </a>

                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInUp" role="menu">

                                <div class="panel-heading">
                                    You have <strong>2</strong> requests
                                </div>

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object thumb thumb-sm">
                                                <img src="/assets/images/arnold-avatar.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Arnold sent you a request</span>
                                                <small class="text-muted">15 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="/assets/images/george-avatar.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">George sent you a request</span>
                                                <small class="text-muted">5 hours ago</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                                <div class="panel-footer">
                                    <a href="#">Show all requests <i class="fa fa-angle-right pull-right"></i></a>
                                </div>

                            </div>

                        </li>

                        <li class="dropdown messages">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge bg-lightred">4</span>
                            </a>

                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInDown" role="menu">

                                <div class="panel-heading">
                                    You have <strong>4</strong> messages
                                </div>

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object thumb thumb-sm">
                                                <img src="/assets/images/ici-avatar.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Imrich sent you a message</span>
                                                <small class="text-muted">12 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="/assets/images/peter-avatar.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Peter sent you a message</span>
                                                <small class="text-muted">46 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="/assets/images/random-avatar1.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Bill sent you a message</span>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="/assets/images/random-avatar3.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Ken sent you a message</span>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                                <div class="panel-footer">
                                    <a href="#">Show all messages <i class="pull-right fa fa-angle-right"></i></a>
                                </div>

                            </div>

                        </li>

                        <li class="dropdown notifications">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-lightred">3</span>
                            </a>

                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInLeft">

                                <div class="panel-heading">
                                    You have <strong>3</strong> notifications
                                </div>

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object media-icon bg-danger">
                                                <i class="fa fa-ban"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">User Imrich cancelled account</span>
                                                <small class="text-muted">6 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object media-icon bg-primary">
                                                <i class="fa fa-bolt"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">New user registered</span>
                                                <small class="text-muted">12 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#" class="media">
                                            <span class="pull-left media-object media-icon bg-greensea">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">User Robert locked account</span>
                                                <small class="text-muted">18 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                                <div class="panel-footer">
                                    <a href="#">Show all notifications <i class="fa fa-angle-right pull-right"></i></a>
                                </div>

                            </div>

                        </li> -->

                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                @if(isset(Auth::user()->avatar ))
                                <img src="{{ Auth::user()->avatar }}" alt="" class="img-circle size-30x30">
                                @else
                                <img src="/assets/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                                @endif
                                {{ Auth::user()->name }}<span><i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                                <li>
                                    <a href="/profile/edit">
                                        <span class="badge bg-greensea pull-right">86%</span>
                                        <i class="fa fa-user"></i>Профиль
                                    </a>
                                </li>
                                <!--li>
                                    <a href="#">
                                        <span class="label bg-lightred pull-right">new</span>
                                        <i class="fa fa-check"></i>Идеи
                                    </a>
                                </li-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Настройки
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-lock"></i>Заблокировать
                                    </a>
                                </li>
                                <li>
                                    <a href="/logout">
                                        <i class="fa fa-sign-out"></i>Выход
                                        
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="toggle-right-sidebar">
                            <a href="#">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Навигация <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                            <li><a href="{{URL::to_route('projects')}}"><i class="fa fa-ils"></i> <span>Projects</span></a></li>
                                            <li><a href="/market"><i class="fa fa-line-chart"></i> <span>Рынок</span></a></li>
                                            <?php //if(in_array(Auth::user()->id, array(1,2,8,31,32,56,57))){ ?>
                                            <li>
                                                <a href="#"><i class="fa fa-diamond"></i> <span>Top Secret</span></a>
                                                <ul>
                                                    <li><a href="/offers"><i class="fa fa-caret-right"></i>Контроль</a></li>
                                                    <li><a href="/offers-big"><i class="fa fa-caret-right"></i>Андрерайтинг</a></li>
                                                </ul>
                                            </li>
                                            <?php //} ?>
                                            <?php //if(DB::connection('bigdata')->table('GOLD')->where('responsible','=',Auth::user()->username)->first()) ?>
                                            <li><a href="/offers/my"><i class="fa fa-diamond"></i> <span>Компании</span></a></li>
                                            <?php // ?>
                                            <!--<li>
                                                <a href="#"><i class="fa fa-envelope-o"></i> <span>Mail</span> <span class="badge bg-lightred">6</span></a>
                                                <ul>
                                                    <li><a href="mail-inbox.html"><i class="fa fa-caret-right"></i> Inbox</a></li>
                                                    <li><a href="mail-compose.html"><i class="fa fa-caret-right"></i> Compose Mail</a></li>
                                                    <li><a href="mail-single.html"><i class="fa fa-caret-right"></i> Single Mail</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-list"></i> <span>Form Stuff</span></a>
                                                <ul>
                                                    <li><a href="form-common.html"><i class="fa fa-caret-right"></i> Common Elements</a></li>
                                                    <li><a href="form-validate.html"><i class="fa fa-caret-right"></i> Validation Elements</a></li>
                                                    <li><a href="form-wizard.html"><i class="fa fa-caret-right"></i> Form Wizard <span class="badge badge-success">13</span></a></li>
                                                    <li><a href="form-upload.html"><i class="fa fa-caret-right"></i> File Upload</a></li>
                                                    <li><a href="form-imgcrop.html"><i class="fa fa-caret-right"></i> Image Crop</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-pencil"></i> <span>UI Kit</span></a>
                                                <ul>
                                                    <li><a href="ui-general.html"><i class="fa fa-caret-right"></i> General Elements</a></li>
                                                    <li><a href="ui-buttons-icons.html"><i class="fa fa-caret-right"></i> Buttons & Icons</a></li>
                                                    <li><a href="ui-typography.html"><i class="fa fa-caret-right"></i> Typography</a></li>
                                                    <li><a href="ui-navs.html"><i class="fa fa-caret-right"></i> Navigation & Accordions</a></li>
                                                    <li><a href="ui-modals.html"><i class="fa fa-caret-right"></i> Modals</a></li>
                                                    <li><a href="ui-tiles.html"><i class="fa fa-caret-right"></i> Tiles</a></li>
                                                    <li><a href="ui-portlets.html"><i class="fa fa-caret-right"></i> Portlets</a></li>
                                                    <li><a href="ui-grid.html"><i class="fa fa-caret-right"></i> Grid</a></li>
                                                    <li><a href="ui-widgets.html"><i class="fa fa-caret-right"></i> Widgets</a></li>
                                                    <li><a href="ui-tree.html"><i class="fa fa-caret-right"></i> Tree </a></li>
                                                    <li><a href="ui-lists.html"><i class="fa fa-caret-right"></i> Lists</a></li>
                                                    <li><a href="ui-alerts.html"><i class="fa fa-caret-right"></i> Alerts & Notifications</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-shopping-cart"></i> <span>Shop</span> <span class="label label-success">new</span></a>
                                                <ul>
                                                    <li><a href="shop-orders.html"><i class="fa fa-caret-right"></i> Orders</a></li>
                                                    <li><a href="shop-single-order.html"><i class="fa fa-caret-right"></i> Single Order</a></li>
                                                    <li><a href="shop-products.html"><i class="fa fa-caret-right"></i> Products</a></li>
                                                    <li><a href="shop-single-product.html"><i class="fa fa-caret-right"></i> Single Product</a></li>
                                                    <li><a href="shop-invoices.html"><i class="fa fa-caret-right"></i> Invoices</a></li>
                                                    <li><a href="shop-single-invoice.html"><i class="fa fa-caret-right"></i> Single Invoice</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Tables</span></a>
                                                <ul>
                                                    <li><a href="tables-bootstrap.html"><i class="fa fa-caret-right"></i> Bootstrap Tables</a></li>
                                                    <li><a href="tables-datatables.html"><i class="fa fa-caret-right"></i> DataTables</a></li>
                                                    <li><a href="tables-footable.html"><i class="fa fa-caret-right"></i> FooTable</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-desktop"></i> <span>Extra Pages</span></a>
                                                <ul>
                                                    <li><a href="login.html"><i class="fa fa-caret-right"></i> Login Page</a></li>
                                                    <li><a href="signup.html"><i class="fa fa-caret-right"></i> Signup Page</a></li>
                                                    <li><a href="forgotpass.html"><i class="fa fa-caret-right"></i> Forgot Password Page</a></li>
                                                    <li><a href="page404.html"><i class="fa fa-caret-right"></i> Page 404</a></li>
                                                    <li><a href="page500.html"><i class="fa fa-caret-right"></i> Page 500</a></li>
                                                    <li><a href="page-offline.html"><i class="fa fa-caret-right"></i> Page Offline</a></li>
                                                    <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
                                                    <li><a href="gallery.html"><i class="fa fa-caret-right"></i> Gallery</a></li>
                                                    <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
                                                    <li><a href="chat.html"><i class="fa fa-caret-right"></i> Chat</a></li>
                                                    <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
                                                    <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="active open">
                                                <a href="#"><i class="fa fa-delicious"></i> <span>Layouts</span></a>
                                                <ul>
                                                    <li><a href="layout-boxed.html"><i class="fa fa-caret-right"></i> Boxed layout</a></li>
                                                    <li class="active"><a href="layout-fullwidth.html"><i class="fa fa-caret-right"></i> Full-width layout</a></li>
                                                    <li><a href="layout-sidebar-sm.html"><i class="fa fa-caret-right"></i> Small sidebar</a></li>
                                                    <li><a href="layout-sidebar-xs.html"><i class="fa fa-caret-right"></i> Extra-small sidebar</a></li>
                                                    <li><a href="layout-offcanvas.html"><i class="fa fa-caret-right"></i> Off-canvas sidebar  <span class="label label-success">new</span></a></li>
                                                    <li><a href="layout-hz-menu.html"><i class="fa fa-caret-right"></i> Horizontal menu</a></li>
                                                    <li><a href="layout-rtl.html"><i class="fa fa-caret-right"></i> RTL layout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-file-o"></i> <span>Front Themes</span> <span class="label label-success">new</span></a>
                                                <ul>
                                                    <li><a href="http://www.tattek.sk/minovate-corp" target="_blank"><i class="fa fa-caret-right"></i> Corporate</a></li>
                                                    <li><a href="http://www.tattek.sk/minovate-commerce" target="_blank"><i class="fa fa-caret-right"></i> Commerce</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                                                <ul>
                                                    <li><a href="maps-vector.html"><i class="fa fa-caret-right"></i> Vector Maps</a></li>
                                                    <li><a href="maps-google.html"><i class="fa fa-caret-right"></i> Google Maps</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="calendar.html"><i class="fa fa-calendar-o"></i> <span>Calendar</span> <span class="label label-success">new events</span></a></li>
                                            <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> <span>Charts & Graphs</span></a></li>

                                            <li>
                                                <a href="#"><i class="fa fa-magic"></i> <span>Menu Levels</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fa fa-caret-right"></i> Menu Level 1.1</a>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-caret-right"></i> Menu Level 2.3</a>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-caret-right"></i> Menu Level 1.2</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a>
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 4.1</a></li>
                                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 4.2</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 3.3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>-->


                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!--div class="panel charts panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarCharts">
                                            Orders Summary <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarCharts" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="summary">

                                            <div class="media">
                                                <a class="pull-right" href="#">
                                                    <span class="sparklineChart"
                                                          values="5, 8, 3, 4, 6, 2, 1, 9, 7"
                                                          sparkType="bar"
                                                          sparkBarColor="#92424e"
                                                          sparkBarWidth="6px"
                                                          sparkHeight="36px">
                                                    Loading...</span>
                                                </a>
                                                <div class="media-body">
                                                    This week sales
                                                    <h4 class="media-heading">26, 149</h4>
                                                </div>
                                            </div>

                                            <div class="media">
                                                <a class="pull-right" href="#">
                                                    <span class="sparklineChart"
                                                          values="2, 4, 5, 3, 8, 9, 7, 3, 5"
                                                          sparkType="bar"
                                                          sparkBarColor="#397193"
                                                          sparkBarWidth="6px"
                                                          sparkHeight="36px">
                                                    Loading...</span>
                                                </a>
                                                <div class="media-body">
                                                    This week balance
                                                    <h4 class="media-heading">318, 651</h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel settings panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarControls">
                                            General Settings <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarControls" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="row">
                                              <label class="col-xs-8 control-label">Switch ON</label>
                                              <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-on" checked="">
                                                  <label class="onoffswitch-label" for="switch-on">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-xs-8 control-label">Switch OFF</label>
                                              <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-off">
                                                  <label class="onoffswitch-label" for="switch-off">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div-->
                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->










            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-fullwidth-layout">

                    <div class="pageheader">

                        <h2>Title <span>Subtitle</span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i> Dashboard</a>
                                </li>
                                @yield('breadcrumbs')
                                
                                <!--li>
                                    <a href="#">Уровень 1</a>
                                </li>
                                <li>
                                    <a href="layout-fullwidth.html">Уровень 2</a>
                                </li-->
                            </ul>
                            
                        </div>

                    </div>
                    @yield('content')
                    <!--p class="lead">This is the full-width layout template.</p-->

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="/js/vendor/d3/d3.min.js"></script>
        <script src="/js/vendor/d3/d3.layout.min.js"></script>

        <script src="/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="/js/vendor/raphael/raphael-min.js"></script>
        <script src="/js/vendor/morris/morris.min.js"></script>

        <script src="/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="/js/vendor/summernote/summernote.min.js"></script>

        <script src="/js/vendor/coolclock/coolclock.js"></script>
        <script src="/js/vendor/coolclock/excanvas.js"></script>
        <script src="/js/vendor/countTo/jquery.countTo.js"></script>
        <!--/ vendor javascripts -->



        

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="/js/main.js"></script>

        @yield('footer')
        <!--/ custom javascripts -->


    </body>
</html>
