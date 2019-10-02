<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POROS | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #15b849">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color: white">SB Admin</a>
            </div>
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white"><i class="fa fa-user"></i> @yield('admin') <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{ url("/admin/dashboard")}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url("/admin/member")}}"><i class="fa fa-users fa-fw"></i> Member</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-rss-square fa-fw"></i> Event <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                                <li>
                                    <a href="{{ url('admin/event/1')}}"><i class="fa fa-android fa-fw"></i>Internal</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/event/2')}}"><i class="fa fa-magic fa-fw"></i>Humas</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/event/3')}}"><i class="fa fa-linux fa-fw"></i>Litbang</a>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-rss-square fa-fw"></i> Blog <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                                <li>
                                    <a href="{{ url('admin/blog/2')}}"><i class="fa fa-android fa-fw"></i> Android Mobile Apps</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/blog/1')}}"><i class="fa fa-magic fa-fw"></i> Design UI/UX</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/blog/3')}}"><i class="fa fa-linux fa-fw"></i> Operating System</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/blog/4')}}"><i class="fa fa-bug fa-fw"></i> Security Network</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/blog/5')}}"><i class="fa fa-html5 fa-fw"></i> Website Development</a>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-briefcase fa-fw"></i> Product <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                                <li>
                                    <a href="{{ url('admin/product/2')}}"><i class="fa fa-android fa-fw"></i> Android Mobile Apps</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/product/1')}}"><i class="fa fa-magic fa-fw"></i> Design UI/UX</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/product/3')}}"><i class="fa fa-linux fa-fw"></i> Operating System</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/product/4')}}"><i class="fa fa-bug fa-fw"></i> Security Network</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/product/5')}}"><i class="fa fa-html5 fa-fw"></i> Website Development</a>
                                </li>
                        </ul>
                    </li><li>
                        <a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url("js/jquery.js")}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url("js/bootstrap.min.js")}}"></script>

</body>

</html>
