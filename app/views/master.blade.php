<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sales Order Management System</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css')}}

    <!-- MetisMenu CSS -->
    {{HTML::style('bower_components/metisMenu/dist/metisMenu.min.css')}}

    <!-- Custom CSS -->
    {{HTML::style('dist/css/sb-admin-2.css')}}

    <!-- Custom Fonts -->
    {{HTML::style('bower_components/font-awesome/css/font-awesome.min.css')}}

    @yield('scripts')
    @yield('styles')
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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sales Order Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <label style = "color: blue"> Welcome, Admin! </label>
                </li>
                <!-- /.dropdown -->
				<li class = "divider"></li>
                <li>
                    <label style = "color: red"> January 27, 2016 11:11 A.M.</label>
                </li>
                <!-- /.dropdown -->
				<li class = "divider"></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="URL::to('/')"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{URL::to('new-sales-order')}}"><i class="fa fa-table fa-fw"></i> New</a>
                        </li>
                        <li>
                            <a href="{{URL::to('view-sales-order')}}"><i class="fa fa-edit fa-fw"></i> View</a>
                        </li>
                        <li>
                            <a href="{{URL::to('report')}}"><i class="fa fa-file-text fa-fw"></i> Reports</a>
                        </li>      
                        <li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> Maintenance <span class="fa arrow"> </a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('maintenance/employee')}}"><i class="fa fa-users fa-fw"></i> Employee</a>
                                </li>
                                <li>
									<a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Product <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level collapse in" aria-expanded="true">
										<li>
											<a href="{{URL::to('maintenance/product-category')}}">Product Category</a>
										</li>
										<li>
											<a href="{{URL::to('maintenance/product-details')}}">Product Details</a>
										</li>
									</ul>
                                </li>
                                <li>
                                    <a href="{{URL::to('maintenance/customer')}}"><i class="fa fa-user fa-fw"></i> Customer</a>
                                </li>
							</ul>
                        </li>  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @yield('internal-scripts')
    <!-- jQuery -->
    {{HTML::script('bower_components/jquery/dist/jquery.min.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js')}}

    <!-- Metis Menu Plugin JavaScript -->
    {{HTML::script('bower_components/metisMenu/dist/metisMenu.min.js')}}

    <!-- Custom Theme JavaScript -->
    {{HTML::script('dist/js/sb-admin-2.js')}}

    {{HTML::script('js/maintenance.js')}}
</body>

</html>
