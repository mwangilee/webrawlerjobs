<!DOCTYPE html>
<html>

    <!-- Mirrored from cube.adbee.technology/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2015 06:24:57 GMT -->
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Cube - Bootstrap Admin Template</title>

        <script type="text/javascript">
        //<![CDATA[
            try {
                if (!window.CloudFlare) {
                    var CloudFlare = [{verbose: 0, p: 0, byc: 0, owlid: "cf", bag2: 1, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"}, atok: "415de077fb5ed63db428dd022699ea88", petok: "5fc1f5588f5fad7079fbe6288d83e12145e71923-1433744280-1800", zone: "adbee.technology", rocket: "0", apps: {"ga_key": {"ua": "UA-49262924-2", "ga_bs": "2"}}}];
                    !function (a, b) {
                        a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d7e13c32551/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                    }()
                }
            } catch (e) {
            }
            ;
        //]]>
        </script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>

        <script src="js/demo-rtl.js"></script>


        <link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>

        <link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>

        <link rel="stylesheet" href="css/libs/datepicker.css" type="text/css"/>
        <link rel="stylesheet" href="css/libs/daterangepicker.css" type="text/css"/>
        <link rel="stylesheet" href="css/libs/bootstrap-timepicker.css" type="text/css"/>
        <link rel="stylesheet" href="css/libs/select2.css" type="text/css"/>

        <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
                        <script src="js/html5shiv.js"></script>
                        <script src="js/respond.min.js"></script>
                <![endif]-->
        <script type="text/javascript">
            /* <![CDATA[ */
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-49262924-2']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

            (function (b) {
                (function (a) {
                    "__CF"in b && "DJS"in b.__CF ? b.__CF.DJS.push(a) : "addEventListener"in b ? b.addEventListener("load", a, !1) : b.attachEvent("onload", a)
                })(function () {
                    "FB"in b && "Event"in FB && "subscribe"in FB.Event && (FB.Event.subscribe("edge.create", function (a) {
                        _gaq.push(["_trackSocial", "facebook", "like", a])
                    }), FB.Event.subscribe("edge.remove", function (a) {
                        _gaq.push(["_trackSocial", "facebook", "unlike", a])
                    }), FB.Event.subscribe("message.send", function (a) {
                        _gaq.push(["_trackSocial", "facebook", "send", a])
                    }));
                    "twttr"in b && "events"in twttr && "bind"in twttr.events && twttr.events.bind("tweet", function (a) {
                        if (a) {
                            var b;
                            if (a.target && a.target.nodeName == "IFRAME")
                                a:{
                                    if (a = a.target.src) {
                                        a = a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);
                                        b = 0;
                                        for (var c; c = a[b]; ++b)
                                            if (c.indexOf("url") === 0) {
                                                b = unescape(c.split("=")[1]);
                                                break a
                                            }
                                    }
                                    b = void 0
                                }
                            _gaq.push(["_trackSocial", "twitter", "tweet", b])
                        }
                    })
                })
            })(window);
            /* ]]> */
        </script>
    </head>
    <body>
        <div id="theme-wrapper">
            <header class="navbar" id="header-navbar">
                <div class="container">
                    <a href="index-2.html" id="logo" class="navbar-brand">
                        <img src="img/logo.png" alt="" class="normal-logo logo-white"/>
                        <img src="img/logo-black.png" alt="" class="normal-logo logo-black"/>
                        <img src="img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
                    </a>
                    <div class="clearfix">
                        <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                            <ul class="nav navbar-nav pull-left">
                                <li>
                                    <a class="btn" id="make-small-nav">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="dropdown hidden-xs">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell"></i>
                                        <span class="count">8</span>
                                    </a>
                                    <ul class="dropdown-menu notifications-list">
                                        <li class="pointer">
                                            <div class="pointer-inner">
                                                <div class="arrow"></div>
                                            </div>
                                        </li>
                                        <li class="item-header">You have 6 new notifications</li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-comment"></i>
                                                <span class="content">New comment on ‘Awesome P...</span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-plus"></i>
                                                <span class="content">New user registration</span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                                <span class="content">New Message from George</span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="content">New purchase</span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-eye"></i>
                                                <span class="content">New order</span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item-footer">
                                            <a href="#">
                                                View all notifications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown hidden-xs">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="count">16</span>
                                    </a>
                                    <ul class="dropdown-menu notifications-list messages-list">
                                        <li class="pointer">
                                            <div class="pointer-inner">
                                                <div class="arrow"></div>
                                            </div>
                                        </li>
                                        <li class="item first-item">
                                            <a href="#">
                                                <img src="img/samples/messages-photo-1.png" alt=""/>
                                                <span class="content">
                                                    <span class="content-headline">
                                                        George Clooney
                                                    </span>
                                                    <span class="content-text">
                                                        Look, just because I don't be givin' no man a foot massage don't make it
                                                        right for Marsellus to throw...
                                                    </span>
                                                </span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <img src="img/samples/messages-photo-2.png" alt=""/>
                                                <span class="content">
                                                    <span class="content-headline">
                                                        Emma Watson
                                                    </span>
                                                    <span class="content-text">
                                                        Look, just because I don't be givin' no man a foot massage don't make it
                                                        right for Marsellus to throw...
                                                    </span>
                                                </span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <img src="img/samples/messages-photo-3.png" alt=""/>
                                                <span class="content">
                                                    <span class="content-headline">
                                                        Robert Downey Jr.
                                                    </span>
                                                    <span class="content-text">
                                                        Look, just because I don't be givin' no man a foot massage don't make it
                                                        right for Marsellus to throw...
                                                    </span>
                                                </span>
                                                <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                            </a>
                                        </li>
                                        <li class="item-footer">
                                            <a href="#">
                                                View all messages
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown hidden-xs">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        New Item
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-archive"></i>
                                                New Product
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                New Order
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-sitemap"></i>
                                                New Category
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-file-text"></i>
                                                New Page
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown hidden-xs">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                                        English
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="item">
                                            <a href="#">
                                                Spanish
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                German
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                Italian
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-no-collapse pull-right" id="header-nav">
                            <ul class="nav navbar-nav pull-right">
                                <li class="mobile-search">
                                    <a class="btn">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <div class="drowdown-search">
                                        <form role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <i class="fa fa-search nav-search-icon"></i>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="dropdown profile-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="img/samples/scarlet-159.png" alt=""/>
                                        <span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                        <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                                    </ul>
                                </li>
                                <li class="hidden-xxs">
                                    <a class="btn">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div id="page-wrapper" class="container">
                <div class="row">
                    <div id="nav-col">
                        <section id="col-left" class="col-left-nano">
                            <div id="col-left-inner" class="col-left-nano-content">
                                <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
                                    <img alt="" src="img/samples/scarlet-159.png"/>
                                    <div class="user-box">
                                        <span class="name">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                Scarlett J.
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                                <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                                                <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                                                <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                                            </ul>
                                        </span>
                                        <span class="status">
                                            <i class="fa fa-circle"></i> Online
                                        </span>
                                    </div>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="nav-header nav-header-first hidden-sm hidden-xs">
                                            Navigation
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Dashboard</span>
                                                <span class="label label-primary label-circle pull-right">28</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-table"></i>
                                                <span>Tables</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="tables.html">
                                                        Simple
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="tables-advanced.html">
                                                        Advanced
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="users.html">
                                                        Users
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="tables-footables.html">
                                                        FooTables
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-envelope"></i>
                                                <span>Email</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="email-inbox.html">
                                                        Inbox
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="email-detail.html">
                                                        Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="email-compose.html">
                                                        Compose
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-bar-chart-o"></i>
                                                <span>Graphs</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="graphs-morris.html">
                                                        Morris &amp; Mixed
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="graphs-flot.html">
                                                        Flot
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="graphs-dygraphs.html">
                                                        Dygraphs
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="graphs-xcharts.html">
                                                        xCharts
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="widgets.html">
                                                <i class="fa fa-th-large"></i>
                                                <span>Widgets</span>
                                                <span class="label label-success pull-right">New</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-copy"></i>
                                                <span>Pages</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="calendar.html">
                                                        Calendar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="gallery.html">
                                                        Gallery
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="gallery-v2.html">
                                                        Gallery v2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pricing.html">
                                                        Pricing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="projects.html">
                                                        Projects
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="team-members.html">
                                                        Team Members
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="timeline.html">
                                                        Timeline
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="timeline-grid.html">
                                                        Timeline Grid
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="user-profile.html">
                                                        User Profile
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="search.html">
                                                        Search Results
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="invoice.html">
                                                        Invoice
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="intro.html">
                                                        Tour Layout
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-header hidden-sm hidden-xs">
                                            Components
                                        </li>
                                        <li class="active">
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-edit"></i>
                                                <span>Forms</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="form-elements.html" class="active">
                                                        Elements
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="x-editable.html">
                                                        X-Editable
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form-wizard.html">
                                                        Wizard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form-wizard-popup.html">
                                                        Wizard popup
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form-wysiwyg.html">
                                                        WYSIWYG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form-summernote.html">
                                                        WYSIWYG Summernote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form-ckeditor.html">
                                                        WYSIWYG CKEditor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form-dropzone.html">
                                                        Multiple File Upload
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-desktop"></i>
                                                <span>UI Kit</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="ui-elements.html">
                                                        Elements
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="notifications.html">
                                                        Notifications &amp; Alerts
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="modals.html">
                                                        Modals
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="video.html">
                                                        Video
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-toggle">
                                                        Icons
                                                        <i class="fa fa-angle-right drop-icon"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="icons-awesome.html">
                                                                Awesome Icons
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-halflings.html">
                                                                Halflings Icons
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="ui-nestable.html">
                                                        Nestable List
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="typography.html">
                                                        Typography
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-toggle">
                                                        3 Level Menu
                                                        <i class="fa fa-angle-right drop-icon"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="#">
                                                                3rd Level
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                3rd Level
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                3rd Level
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="maps.html">
                                                <i class="fa fa-map-marker"></i>
                                                <span>Google Maps</span>
                                                <span class="label label-danger pull-right">Updated</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-file-text-o"></i>
                                                <span>Extra pages</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="faq.html">
                                                        FAQ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="emails.html">
                                                        Email Templates
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="login.html">
                                                        Login
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="login-full.html">
                                                        Login Full
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="registration.html">
                                                        Registration
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="registration-full.html">
                                                        Registration Full
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="forgot-password.html">
                                                        Forgot Password
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="forgot-password-full.html">
                                                        Forgot Password Full
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="lock-screen.html">
                                                        Lock Screen
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="lock-screen-full.html">
                                                        Lock Screen Full
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="error-404.html">
                                                        Error 404
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="error-404-v2.html">
                                                        Error 404 Nested
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="error-500.html">
                                                        Error 500
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="extra-grid.html">
                                                        Grid
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="angularjs/index.html">
                                                <i class="fa fa-google"></i>
                                                <span>AngularJS Demo</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <div id="nav-col-submenu"></div>
                    </div>
                    <div id="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li class="active"><span>Form Elements</span></li>
                                        </ol>
                                        <h1>Form Elements</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Basic elements</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextarea">Textarea</label>
                                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTooltip">Input with Tooltip</label>
                                                        <input type="text" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="very nice tooltip about this field">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Default Select</label>
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Multiple select</label>
                                                        <select multiple class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-group-select2">
                                                        <label>Enhanced Select</label>
                                                        <select style="width:300px" id="sel2">
                                                            <option value="United States">United States</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-group-select2">
                                                        <label>Multi-Value Select Boxes</label>
                                                        <select style="width:300px" id="sel2Multi" multiple>
                                                            <option value="United States">United States</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleAutocompleteSimple">Autocomplete</label>
                                                        <input type="text" class="form-control" id="exampleAutocompleteSimple" placeholder="countries">
                                                    </div>
                                                    <div class="form-group example-twitter-oss">
                                                        <label for="exampleAutocomplete">Autocomplete with templating</label>
                                                        <input type="text" class="form-control" id="exampleAutocomplete" placeholder="open source projects by Twitter">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="examplePwdMeter">Password strength meter (start typing...)</label>
                                                        <input type="password" class="form-control" id="examplePwdMeter" placeholder="Enter password" data-indicator="pwindicator">
                                                        <div id="pwindicator" class="pwdindicator">
                                                            <div class="bar"></div>
                                                            <div class="pwdstrength-label"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Other elements</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">Input with success</label>
                                                    <input type="text" class="form-control" id="inputSuccess">
                                                    <span class="help-block"><i class="icon-ok-sign"></i> Success message</span>
                                                </div>
                                                <div class="form-group has-warning">
                                                    <label class="control-label" for="inputWarning">Input with warning</label>
                                                    <input type="text" class="form-control" id="inputWarning">
                                                    <span class="help-block"><i class="icon-warning-sign"></i> Warning message</span>
                                                </div>
                                                <div class="form-group has-error">
                                                    <label class="control-label" for="inputError">Input with error</label>
                                                    <input type="text" class="form-control" id="inputError">
                                                    <span class="help-block"><i class="icon-remove-sign"></i> Error message</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Disabled input</label>
                                                    <input class="form-control" id="exampleInputFile" type="text" placeholder="Disabled input here..." disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Checkboxes</label>
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="checkbox-1" checked="checked"/>
                                                        <label for="checkbox-1">
                                                            Option one is this and that&mdash;be sure to include why it's great
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="checkbox-2"/>
                                                        <label for="checkbox-2">
                                                            Option two is this and that&mdash;be sure to include why it's great
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-nice">
                                                        <input type="checkbox" id="checkbox-3"/>
                                                        <label for="checkbox-3">
                                                            Option three is this and that&mdash;be sure to include why it's great
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Radio inputs</label>
                                                    <div class="radio">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                        <label for="optionsRadios1">
                                                            Option one is this and that&mdash;be sure to include why it's great
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                        <label for="optionsRadios2">
                                                            Option two can be something else and selecting it will deselect option one
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Inline checkboxes</label>
                                                    <br/>
                                                    <div class="checkbox-nice checkbox-inline">
                                                        <input type="checkbox" id="checkbox-inl-1"/>
                                                        <label for="checkbox-inl-1">
                                                            1
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-nice checkbox-inline">
                                                        <input type="checkbox" id="checkbox-inl-2"/>
                                                        <label for="checkbox-inl-2">
                                                            2
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-nice checkbox-inline">
                                                        <input type="checkbox" id="checkbox-inl-3"/>
                                                        <label for="checkbox-inl-3">
                                                            3
                                                        </label>
                                                    </div>
                                                </div>
                                                <h3><span>Checkbox buttons</span></h3>
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox"> Option 1
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox"> Option 2
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox"> Option 3
                                                    </label>
                                                </div>
                                                <h3><span>Radio buttons</span></h3>
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" id="option1"> Option 1
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" id="option2"> Option 2
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" id="option3"> Option 3
                                                    </label>
                                                </div>
                                                <br/><br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Inline form</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <form class="form-inline" role="form">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox checkbox-nice">
                                                        <input type="checkbox" id="remember-me" checked="checked"/>
                                                        <label for="remember-me">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Sign in</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Horizontal form</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                                        <div class="col-lg-10">
                                                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                                        <div class="col-lg-10">
                                                            <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <div class="checkbox-nice">
                                                                <input type="checkbox" id="remember-me2" checked="checked"/>
                                                                <label for="remember-me2">
                                                                    Remember me
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" class="btn btn-success">Sign in</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Input groups</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="examplePrepend">Prepend</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control" id="examplePrepend" placeholder="prepend text here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleAppend">Append</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="exampleAppend">
                                                            <span class="input-group-addon">.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleAppPre">Append and Prepend</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            <input type="text" class="form-control" id="exampleAppPre">
                                                            <span class="input-group-addon">.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exmaplePrependCheck">Prepend checkbox</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <input type="checkbox">
                                                            </span>
                                                            <input type="text" class="form-control" id="exmaplePrependCheck">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleRadio">Prepend radio</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <input type="radio">
                                                            </span>
                                                            <input type="text" class="form-control" id="exampleRadio">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exmaplePrependButton">Prepend button</label>
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-primary" type="button">Go!</button>
                                                            </span>
                                                            <input type="text" class="form-control" id="exmaplePrependButton">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="examplePrependDropdown">Prepend button dropdown</label>
                                                        <div class="input-group">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Another action</a></li>
                                                                    <li><a href="#">Something else here</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                            <input type="text" class="form-control" id="examplePrependDropdown">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Masked inputs</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="maskedDate">Date</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text" class="form-control" id="maskedDate">
                                                        </div>
                                                        <span class="help-block">ex. 99/99/9999</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="maskedPhone">Phone</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                            <input type="text" class="form-control" id="maskedPhone">
                                                        </div>
                                                        <span class="help-block">ex. (999) 999-9999</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="maskedPhoneExt">Phone + Ext</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                                            <input type="text" class="form-control" id="maskedPhoneExt">
                                                        </div>
                                                        <span class="help-block">ex. (999) 999-9999? x99999</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="maskedTax">Tax ID</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                            <input type="text" class="form-control" id="maskedTax">
                                                        </div>
                                                        <span class="help-block">ex. 99-9999999</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="maskedSsn">SSN</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                                            <input type="text" class="form-control" id="maskedSsn">
                                                        </div>
                                                        <span class="help-block">ex. 999-99-9999</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Switches</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="pull-left">
                                                            <div class="onoffswitch">
                                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                                    <div class="onoffswitch-inner"></div>
                                                                    <div class="onoffswitch-switch"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="pull-left">
                                                            <div class="onoffswitch onoffswitch-danger">
                                                                <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                                                                <label class="onoffswitch-label" for="myonoffswitch2">
                                                                    <div class="onoffswitch-inner"></div>
                                                                    <div class="onoffswitch-switch"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="pull-left">
                                                            <div class="onoffswitch onoffswitch-warning">
                                                                <input type="checkbox" name="onoffswitch3" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                                                                <label class="onoffswitch-label" for="myonoffswitch3">
                                                                    <div class="onoffswitch-inner"></div>
                                                                    <div class="onoffswitch-switch"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="pull-left">
                                                            <div class="onoffswitch onoffswitch-success">
                                                                <input type="checkbox" name="onoffswitch4" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                                                                <label class="onoffswitch-label" for="myonoffswitch4">
                                                                    <div class="onoffswitch-inner"></div>
                                                                    <div class="onoffswitch-switch"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                        <br/>
                                                        <span class="help-block">
                                                            Pure CSS3 On/Off FlipSwitch - you can make your own custom on/off switch
                                                            <a href="http://proto.io/freebies/onoff/" target="_blank">here</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Datepickers</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="datepickerDate">Date</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control" id="datepickerDate">
                                                                </div>
                                                                <span class="help-block">format mm-dd-yyyy</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="datepickerDateRange">Date range</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                                                                    <input type="text" class="form-control" id="datepickerDateRange">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="datepickerDateComponent">Date readonly</label>
                                                                <div class="input-group" data-date-format="dd-mm-yyyy">
                                                                    <input type="text" class="form-control" id="datepickerDateComponent" readonly>
                                                                    <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                                                </div>
                                                                <span class="help-block">As component.</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="timepicker">Time picker</label>
                                                                <div class="input-group input-append bootstrap-timepicker">
                                                                    <input type="text" class="form-control" id="timepicker">
                                                                    <span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box">
                                            <header class="main-box-header clearfix">
                                                <h2>Grid sizing</h2>
                                            </header>
                                            <div class="main-box-body clearfix">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="form-group col-xs-3">
                                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                                        </div>
                                                        <div class="form-group col-xs-3">
                                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                                        </div>
                                                        <div class="form-group col-xs-3">
                                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                                        </div>
                                                        <div class="form-group col-xs-3">
                                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-4">
                                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                                        </div>
                                                        <div class="form-group col-xs-4">
                                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                                        </div>
                                                        <div class="form-group col-xs-4">
                                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-6">
                                                            <input type="text" class="form-control" placeholder=".col-xs-6">
                                                        </div>
                                                        <div class="form-group col-xs-6">
                                                            <input type="text" class="form-control" placeholder=".col-xs-6">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-7">
                                                            <input type="text" class="form-control" placeholder=".col-xs-7">
                                                        </div>
                                                        <div class="form-group col-xs-5">
                                                            <input type="text" class="form-control" placeholder=".col-xs-5">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12">
                                                            <input type="text" class="form-control" placeholder=".col-xs-12">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer id="footer-bar" class="row">
                            <p id="footer-copyright" class="col-xs-12">
                                Powered by Cube Theme.
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <div id="config-tool" class="closed">
            <a id="config-tool-cog">
                <i class="fa fa-cog"></i>
            </a>
            <div id="config-tool-options">
                <h4>Layout Options</h4>
                <ul>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-fixed-header"/>
                            <label for="config-fixed-header">
                                Fixed Header
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-fixed-sidebar"/>
                            <label for="config-fixed-sidebar">
                                Fixed Left Menu
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-fixed-footer"/>
                            <label for="config-fixed-footer">
                                Fixed Footer
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-boxed-layout"/>
                            <label for="config-boxed-layout">
                                Boxed Layout
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox-nice">
                            <input type="checkbox" id="config-rtl-layout"/>
                            <label for="config-rtl-layout">
                                Right-to-Left
                            </label>
                        </div>
                    </li>
                </ul>
                <br/>
                <h4>Skin Color</h4>
                <ul id="skin-colors" class="clearfix">
                    <li>
                        <a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
                        </a>
                    </li>
                    <li>
                        <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <script src="js/demo-skin-changer.js"></script>  
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.nanoscroller.min.js"></script>
        <script src="js/demo.js"></script>  

        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap-timepicker.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/hogan.js"></script>
        <script src="js/typeahead.min.js"></script>
        <script src="js/jquery.pwstrength.js"></script>

        <script src="js/scripts.js"></script>
        <script src="js/pace.min.js"></script>

        <script>
            $(function ($) {
                //tooltip init
                $('#exampleTooltip').tooltip();

                //nice select boxes
                $('#sel2').select2();

                $('#sel2Multi').select2({
                    placeholder: 'Select a Country',
                    allowClear: true
                });

                //masked inputs
                $("#maskedDate").mask("99/99/9999");
                $("#maskedPhone").mask("(999) 999-9999");
                $("#maskedPhoneExt").mask("(999) 999-9999? x99999");
                $("#maskedTax").mask("99-9999999");
                $("#maskedSsn").mask("999-99-9999");

                $("#maskedProductKey").mask("a*-999-a999", {placeholder: " ", completed: function () {
                        alert("You typed the following: " + this.val());
                    }});

                $.mask.definitions['~'] = '[+-]';
                $("#maskedEye").mask("~9.99 ~9.99 999");

                //datepicker
                $('#datepickerDate').datepicker({
                    format: 'mm-dd-yyyy'
                });

                $('#datepickerDateComponent').datepicker();

                //daterange picker
                $('#datepickerDateRange').daterangepicker();

                //timepicker
                $('#timepicker').timepicker({
                    minuteStep: 5,
                    showSeconds: true,
                    showMeridian: false,
                    disableFocus: false,
                    showWidget: true
                }).focus(function () {
                    $(this).next().trigger('click');
                });

                //autocomplete simple
                $('#exampleAutocompleteSimple').typeahead({
                    prefetch: '/data/countries.json',
                    limit: 10
                });

                //autocomplete with templating
                $('#exampleAutocomplete').typeahead({
                    name: 'twitter-oss',
                    prefetch: '/data/repos.json',
                    template: [
                        '<p class="repo-language">{{language}}</p>',
                        '<p class="repo-name">{{name}}</p>',
                        '<p class="repo-description">{{description}}</p>'
                    ].join(''),
                    engine: Hogan
                });

                //password strength meter
                $('#examplePwdMeter').pwstrength({
                    label: '.pwdstrength-label'
                });

            });
        </script>
    </body>

    <!-- Mirrored from cube.adbee.technology/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2015 06:25:00 GMT -->
</html>