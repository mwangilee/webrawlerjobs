<!DOCTYPE html>
<html>

    <!-- Mirrored from cube.adbee.technology/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2015 06:19:55 GMT -->
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Cube - Bootstrap Admin Template</title>

        <script type="text/javascript">
        //<![CDATA[
            try {
                if (!window.CloudFlare) {
                    var CloudFlare = [{verbose: 0, p: 0, byc: 0, owlid: "cf", bag2: 1, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"}, atok: "415de077fb5ed63db428dd022699ea88", petok: "9fac70ecad4e12e946eae56a2a491f41bce960ac-1433744265-1800", zone: "adbee.technology", rocket: "0", apps: {"ga_key": {"ua": "UA-49262924-2", "ga_bs": "2"}}}];
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
                                        <li class="active">
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
                                                    <a href="users.html" class="active">
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
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                <i class="fa fa-edit"></i>
                                                <span>Forms</span>
                                                <i class="fa fa-angle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="form-elements.html">
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
                    <div id="content-wrapper"><div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li class="active"><span>Users</span></li>
                                        </ol>
                                        <div class="clearfix">
                                            <h1 class="pull-left">Users</h1>
                                            <div class="pull-right top-page-ui">
                                                <a href="#" class="btn btn-primary pull-right">
                                                    <i class="fa fa-plus-circle fa-lg"></i> Add user
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box no-header clearfix">
                                            <div class="main-box-body clearfix">
                                                <div class="table-responsive">
                                                    <table class="table user-list table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th><span>User</span></th>
                                                                <th><span>Created</span></th>
                                                                <th class="text-center"><span>Status</span></th>
                                                                <th><span>Email</span></th>
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/scarlet-159.png" alt=""/>
                                                                    <a href="#" class="user-link">Scarlett Johansson</a>
                                                                    <span class="user-subhead">Admin</span>
                                                                </td>
                                                                <td>
                                                                    2013/08/08
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-default">Inactive</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#"><span class="__cf_email__" data-cfemail="f39e9a9f92b398869d9a80dd909c9e">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
    /* <![CDATA[ */!function () {
        try {
            var t = "currentScript"in document ? document.currentScript : function () {
                for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                    if (t[e].getAttribute("cf-hash"))
                        return t[e]
            }();
            if (t && t.previousSibling) {
                var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                if (a) {
                    for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                        i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                    e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                }
            }
        } catch (u) {
        }
    }();/* ]]> */</script></a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/robert-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Robert Downey Jr.</a>
                                                                    <span class="user-subhead">Member</span>
                                                                </td>
                                                                <td>
                                                                    2013/08/12
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-success">Active</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#"><span class="__cf_email__" data-cfemail="e68b87948a8988a6849487888289c885898b">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
    /* <![CDATA[ */!function () {
        try {
            var t = "currentScript"in document ? document.currentScript : function () {
                for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                    if (t[e].getAttribute("cf-hash"))
                        return t[e]
            }();
            if (t && t.previousSibling) {
                var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                if (a) {
                    for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                        i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                    e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                }
            }
        } catch (u) {
        }
    }();/* ]]> */</script></a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/ryan-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Ryan Gossling</a>
                                                                    <span class="user-subhead">Registered</span>
                                                                </td>
                                                                <td>
                                                                    2013/03/03
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-danger">Banned</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#">jack@nicholson</a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/emma-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Emma Watson</a>
                                                                    <span class="user-subhead">Registered</span>
                                                                </td>
                                                                <td>
                                                                    2004/01/24
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-warning">Pending</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#"><span class="__cf_email__" data-cfemail="f29a879f829a80978bb2909d95938086dc919d9f">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
    /* <![CDATA[ */!function () {
        try {
            var t = "currentScript"in document ? document.currentScript : function () {
                for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                    if (t[e].getAttribute("cf-hash"))
                        return t[e]
            }();
            if (t && t.previousSibling) {
                var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                if (a) {
                    for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                        i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                    e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                }
            }
        } catch (u) {
        }
    }();/* ]]> */</script></a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/robert-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Robert Downey Jr.</a>
                                                                    <span class="user-subhead">Admin</span>
                                                                </td>
                                                                <td>
                                                                    2013/12/31
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-success">Active</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#">spencer@tracy</a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/kunis-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Mila Kunis</a>
                                                                    <span class="user-subhead">Admin</span>
                                                                </td>
                                                                <td>
                                                                    2013/08/08
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-default">Inactive</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#"><span class="__cf_email__" data-cfemail="d8b5b1b4b998b3adb6b1abf6bbb7b5">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
    /* <![CDATA[ */!function () {
        try {
            var t = "currentScript"in document ? document.currentScript : function () {
                for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                    if (t[e].getAttribute("cf-hash"))
                        return t[e]
            }();
            if (t && t.previousSibling) {
                var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                if (a) {
                    for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                        i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                    e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                }
            }
        } catch (u) {
        }
    }();/* ]]> */</script></a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/lima-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">George Clooney</a>
                                                                    <span class="user-subhead">Member</span>
                                                                </td>
                                                                <td>
                                                                    2013/08/12
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-success">Active</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#"><span class="__cf_email__" data-cfemail="234e42514f4c4d634151424d474c0d404c4e">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
    /* <![CDATA[ */!function () {
        try {
            var t = "currentScript"in document ? document.currentScript : function () {
                for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                    if (t[e].getAttribute("cf-hash"))
                        return t[e]
            }();
            if (t && t.previousSibling) {
                var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                if (a) {
                    for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                        i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                    e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                }
            }
        } catch (u) {
        }
    }();/* ]]> */</script></a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/ryan-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Ryan Gossling</a>
                                                                    <span class="user-subhead">Registered</span>
                                                                </td>
                                                                <td>
                                                                    2013/03/03
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-danger">Banned</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#">jack@nicholson</a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/emma-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Emma Watson</a>
                                                                    <span class="user-subhead">Registered</span>
                                                                </td>
                                                                <td>
                                                                    2004/01/24
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-warning">Pending</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#"><span class="__cf_email__" data-cfemail="7e160b130e160c1b073e1c11191f0c0a501d1113">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
    /* <![CDATA[ */!function () {
        try {
            var t = "currentScript"in document ? document.currentScript : function () {
                for (var t = document.getElementsByTagName("script"), e = t.length; e--; )
                    if (t[e].getAttribute("cf-hash"))
                        return t[e]
            }();
            if (t && t.previousSibling) {
                var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                if (a) {
                    for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)
                        i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                    e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                }
            }
        } catch (u) {
        }
    }();/* ]]> */</script></a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/samples/robert-300.jpg" alt=""/>
                                                                    <a href="#" class="user-link">Robert Downey Jr.</a>
                                                                    <span class="user-subhead">Admin</span>
                                                                </td>
                                                                <td>
                                                                    2013/12/31
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-success">Active</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#">spencer@tracy</a>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="table-link danger">
                                                                        <span class="fa-stack">
                                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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


        <script src="js/scripts.js"></script>
        <script src="js/pace.min.js"></script>

    </body>

    <!-- Mirrored from cube.adbee.technology/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2015 06:19:55 GMT -->
</html>