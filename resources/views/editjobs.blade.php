<!DOCTYPE html>
<html>

    <!-- Mirrored from cube.adbee.technology/tables-footables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2015 06:19:55 GMT -->
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Admin Module</title>

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
        <link rel="stylesheet" type="text/css" href="{{ url() }}/css/bootstrap/bootstrap.min.css"/>

        <script src="{{ url() }}/js/demo-rtl.js"></script>


        <link rel="stylesheet" type="text/css" href="{{ url() }}/css/libs/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="{{ url() }}/css/libs/nanoscroller.css"/>

        <link rel="stylesheet" type="text/css" href="{{ url() }}/css/compiled/theme_styles.css"/>

        <link rel="stylesheet" href="{{ url() }}/css/libs/footable.core.css" type="text/css"/>

        <link type="image/x-icon" href="{{ url() }}/favicon.png" rel="shortcut icon"/>

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
                    <a href="#" id="logo" class="navbar-brand">
                        <img src="{{ url() }}/img/logo.png" alt="" class="normal-logo logo-white"/>
                        <img src="{{ url() }}/img/logo-black.png" alt="" class="normal-logo logo-black"/>
                        <img src="{{ url() }}/img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
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
                                        <span class="count">{{$countsize}}</span>
                                    </a>
                                    <ul class="dropdown-menu notifications-list">
                                        <li class="pointer">
                                            <div class="pointer-inner">
                                                <div class="arrow"></div>
                                            </div>
                                        </li>

                                        <li class="item-header">You have {{$countsize}} new posts</li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa fa-comment"></i>
                                                <span class="content">{{$countsize}} new posts to approve</span>

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
                                        <img src="{{ url() }}/img/samples/nophoto.png" alt=""/>
                                        <span class="hidden-xs">Admin</span> <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{url('/logout')}}"><i class="fa fa-power-off"></i>Logout</a></li>
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
                                    <img alt="" src="{{ url() }}/img/samples/nophoto.png"/>
                                    <div class="user-box">
                                        <span class="name">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                Administrator.
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
                                            <a href="{{url('/jobposts')}}">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Home</span>
                                                <span class="label label-primary label-circle pull-right"></span>
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
                                            <li class="active"><span>Jobs</span></li>
                                        </ol>
                                        <h1>Approve Posts </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-box clearfix">
                                            <header class="main-box-header clearfix">

                                            </header>
                                            <div class="main-box-body clearfix">

                                                <form role="form" method="post">
                                                    @foreach ($jobs as $index)

                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title" name="posttitle" value=" {{$index->title}}" >

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextarea">Description</label>
                                                        <textarea class="form-control" id="desc" rows="10" name="description">{{$index->description}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" id="idx" name="postid" value="{{$index->idx}}">
                                                    </div>
                                                    @endforeach
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            
                                                            <a href="{{url("/approve_posts/$index->idx")}}" class="btn btn-success">Approve</a>
                                                            &nbsp;&nbsp;
                                                             <a href="{{url("/delete_posts/$index->idx")}}" class="btn btn-danger">Delete</a>
                                                           
                                                        </div>
                                                      
                                                     </div>

                                                    
                                                    <?php echo csrf_field(); ?>
                                                </form>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer id="footer-bar" class="row">
                            <p id="footer-copyright" class="col-xs-12">
                                Powered by Slevian Global Limited.
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ url() }}/js/demo-skin-changer.js"></script>  
        <script src="{{ url() }}/js/jquery.js"></script>
        <script src="{{ url() }}/js/bootstrap.js"></script>
        <script src="{{ url() }}/js/jquery.nanoscroller.min.js"></script>
        <script src="{{ url() }}/js/demo.js"></script>  

        <script src="{{ url() }}/js/footable.js"></script>
        <script src="{{ url() }}/js/footable.sort.js"></script>
        <script src="{{ url() }}/js/footable.paginate.js"></script>
        <script src="{{ url() }}/js/footable.filter.js"></script>

        <script src="{{ url() }}/js/scripts.js"></script>
        <script src="{{ url() }}/js/pace.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.footable').footable();
            });
        </script>
    </body>

    <!-- Mirrored from cube.adbee.technology/tables-footables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2015 06:19:58 GMT -->
</html>