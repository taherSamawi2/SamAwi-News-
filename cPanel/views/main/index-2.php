﻿<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from ekan-admin-templates.multipurposethemes.com/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:13:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://ekan-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>SamAwi News- Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- daterange picker -->	
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- Morris charts -->
	<link rel="stylesheet" href="../assets/vendor_components/morris.js/morris.css">	
	
    <!-- c3 CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor_components/c3/c3.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- Ekan Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-info dark-sidebar light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<i class="ti-align-left"></i>
		  </a>
		  <a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view" href="javascript:void(0);"><i class="mdi mdi-magnify"></i></a>
		  <form id="search_form" role="search" class="top-nav-search pull-left collapse ml-20">
			<div class="input-group">
				<input type="text" name="example-input1-group2" class="form-control" placeholder="ابحث..">
				<span class="input-group-btn">
				<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="mdi mdi-magnify"></i></button>
				</span>
			</div>
		  </form> 
		
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- Messages -->
		  <li class="dropdown messages-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <i class="mdi mdi-email"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20 bg-light">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Messages</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li><!-- start message -->
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Lorem Ipsum
						  <small><i class="fa fa-clock-o"></i> 15 mins</small>
						 </h4>
						 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					  </div>
					</a>
				  </li>
				  <!-- end message -->
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Nullam tempor
						  <small><i class="fa fa-clock-o"></i> 4 hours</small>
						 </h4>
						 <span>Curabitur facilisis erat quis metus congue viverra.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Proin venenatis
						  <small><i class="fa fa-clock-o"></i> Today</small>
						 </h4>
						 <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Praesent suscipit
						<small><i class="fa fa-clock-o"></i> Yesterday</small>
						 </h4>
						 <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Donec tempor
						  <small><i class="fa fa-clock-o"></i> 2 days</small>
						 </h4>
						 <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
					  </div>

					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">				  
				  <a href="#" class="bg-light">See all e-Mails</a>
			  </li>
			</ul>
		  </li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <i class="mdi mdi-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="bg-light p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#" class="bg-light">View all</a>
			  </li>
			</ul>
		  </li>
		  <!-- Tasks-->
		  <li class="dropdown tasks-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <i class="mdi mdi-bulletin-board"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20 bg-light">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Tasks</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li><!-- Task item -->
					<a href="#">
					  <h3>
						Lorem ipsum dolor sit amet
						<small class="pull-right">30%</small>
					  </h3>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
							 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
						  <span class="sr-only">30% Complete</span>
						</div>
					  </div>
					</a>
				  </li>
				  <!-- end task item -->
				  <li><!-- Task item -->
					<a href="#">
					  <h3>
						Vestibulum nec ligula
						<small class="pull-right">20%</small>
					  </h3>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
							 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
						  <span class="sr-only">20% Complete</span>
						</div>
					  </div>
					</a>
				  </li>
				  <!-- end task item -->
				  <li><!-- Task item -->
					<a href="#">
					  <h3>
						Donec id leo ut ipsum
						<small class="pull-right">70%</small>
					  </h3>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
							 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
						  <span class="sr-only">70% Complete</span>
						</div>
					  </div>
					</a>
				  </li>
				  <!-- end task item -->
				  <li><!-- Task item -->
					<a href="#">
					  <h3>
						Praesent vitae tellus
						<small class="pull-right">40%</small>
					  </h3>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
							 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
						  <span class="sr-only">40% Complete</span>
						</div>
					  </div>
					</a>
				  </li>
				  <!-- end task item -->
				  <li><!-- Task item -->
					<a href="#">
					  <h3>
						Nam varius sapien
						<small class="pull-right">80%</small>
					  </h3>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
							 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
						  <span class="sr-only">80% Complete</span>
						</div>
					  </div>
					</a>
				  </li>
				  <!-- end task item -->
				  <li><!-- Task item -->
					<a href="#">
					  <h3>
						Nunc fringilla
						<small class="pull-right">90%</small>
					  </h3>
					  <div class="progress xs">
						<div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
							 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
						  <span class="sr-only">90% Complete</span>
						</div>
					  </div>
					</a>
				  </li>
				  <!-- end task item -->
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#" class="bg-light">View all tasks</a>
			  </li>
			</ul>
		  </li>	
		  
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
              </li>
            </ul>
          </li>	
			
		  
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
		  
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <img src="../images/logo-big.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
			<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		  
        <li class="header nav-small-cap">PERSONAL</li>
		
		<li class="treeview active">
          <a href="#">
            <i class="ti-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="ti-more"></i>Main Dashboard</a></li>
            <li class="active"><a href="index-2.html"><i class="ti-more"></i>Dashboard 2</a></li>
            <li><a href="index-3.html"><i class="ti-more"></i>Dashboard 3</a></li>
            <li><a href="index-4.html"><i class="ti-more"></i>Dashboard 4</a></li>
            <li><a href="index-5.html"><i class="ti-more"></i>Dashboard 5</a></li>
          </ul>
        </li>  
		  
		<li class="header nav-small-cap">CHARTS</li>  
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-stats-up"></i>
			<span>C3 Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_c3_axis.html"><i class="ti-more"></i>Axis Chart</a></li>
            <li><a href="pages/charts_c3_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
            <li><a href="pages/charts_c3_data.html"><i class="ti-more"></i>Data Chart</a></li>
            <li><a href="pages/charts_c3_line.html"><i class="ti-more"></i>Line Chart</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-pie-chart"></i>
			<span>Echarts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_echarts_basic.html"><i class="ti-more"></i>Basic Charts</a></li>
            <li><a href="pages/charts_echarts_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
            <li><a href="pages/charts_echarts_pie_doughnut.html"><i class="ti-more"></i>Pie & Doughnut Chart</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-pie-chart"></i>
			<span>AM Chart</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_amCharts.html"><i class="ti-more"></i>amCharts Charts</a></li>
            <li><a href="pages/charts_amCharts_stock.html"><i class="ti-more"></i>amCharts Stock Charts</a></li>
            <li><a href="pages/charts_amCharts_maps.html"><i class="ti-more"></i>amCharts Maps</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-pie-chart"></i>
			<span>Extra Chart</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
            <li><a href="pages/charts_flot.html"><i class="ti-more"></i>Flot</a></li>
            <li><a href="pages/charts_inline.html"><i class="ti-more"></i>Inline charts</a></li>
            <li><a href="pages/charts_morris.html"><i class="ti-more"></i>Morris</a></li>
            <li><a href="pages/charts_peity.html"><i class="ti-more"></i>Peity</a></li>
            <li><a href="pages/charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
            <li><a href="pages/charts_rickshaw.html"><i class="ti-more"></i>Rickshaw Charts</a></li>
            <li><a href="pages/charts_nvd3.html"><i class="ti-more"></i>NVD3 Charts</a></li>
          </ul>
        </li>	  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-receipt"></i>
			<span>Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="pages/invoice.html"><i class="ti-more"></i>Invoice</a></li>
			<li><a href="pages/invoicelist.html"><i class="ti-more"></i>Invoice List</a></li>	
          </ul>
        </li>			  
		  
        <li class="header nav-small-cap">APPS</li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-layout-grid2"></i>
            <span>Extra</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="pages/extra_calendar.html"><i class="ti-more"></i>Calendar</a></li>
            <li><a href="pages/extra_taskboard.html"><i class="ti-more"></i>Project DashBoard</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-email"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
            <li><a href="pages/mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
            <li><a href="pages/mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
          </ul>
        </li>
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-user"></i>
            <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/members.html"><i class="ti-more"></i>Members Grid</a></li>
            <li><a href="pages/members_list.html"><i class="ti-more"></i>Members List</a></li>
            <li><a href="pages/member_profile.html"><i class="ti-more"></i>Member Profile</a></li>			  
          </ul>
        </li>	  
		
        <li class="header nav-small-cap">UI ELEMENTS</li>		  
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-pencil-alt"></i>
            <span>Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/ui_badges.html"><i class="ti-more"></i>Badges</a></li>
            <li><a href="pages/ui_border_utilities.html"><i class="ti-more"></i>Border</a></li>
            <li><a href="pages/ui_buttons.html"><i class="ti-more"></i>Buttons</a></li>	
            <li><a href="pages/ui_color_utilities.html"><i class="ti-more"></i>Color</a></li>
            <li><a href="pages/ui_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="pages/ui_dropdown_grid.html"><i class="ti-more"></i>Dropdown Grid</a></li>
            <li><a href="pages/ui_typography.html"><i class="ti-more"></i>Typography</a></li>
            <li><a href="pages/ui_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
            <li><a href="pages/ui_grid.html"><i class="ti-more"></i>Grid</a></li>
            <li><a href="pages/ui_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
            <li><a href="pages/ui_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="pages/ui_tab.html"><i class="ti-more"></i>Tabs</a></li>
            <li><a href="pages/ui_timeline.html"><i class="ti-more"></i>Timeline</a></li>
            <li><a href="pages/ui_timeline_horizontal.html"><i class="ti-more"></i>Timeline Horizontal</a></li>
            <li><a href="pages/component_bootstrap_switch.html"><i class="ti-more"></i>Bootstrap Switch</a></li>
            <li><a href="pages/component_media_advanced.html"><i class="ti-more"></i>Advanced Medias</a></li>
			<li><a href="pages/component_modals.html"><i class="ti-more"></i>Modals</a></li>
            <li><a href="pages/component_notification.html"><i class="ti-more"></i>Notification</a></li>
            <li><a href="pages/component_portlet_draggable.html"><i class="ti-more"></i>Draggable Portlets</a></li>
            <li><a href="pages/component_sweatalert.html"><i class="ti-more"></i>Sweet Alert</a></li>
            <li><a href="pages/component_rangeslider.html"><i class="ti-more"></i>Range Slider</a></li>
            <li><a href="pages/component_rating.html"><i class="ti-more"></i>Ratings</a></li>
            <li><a href="pages/component_animations.html"><i class="ti-more"></i>Animations</a></li>
			<li><a href="pages/box_advanced.html"><i class="ti-more"></i>Advanced Card</a></li>
            <li><a href="pages/box_basic.html"><i class="ti-more"></i>Basic Card</a></li>
            <li><a href="pages/box_color.html"><i class="ti-more"></i>Card Color</a></li>
          </ul>
        </li>  
		
		<li class="treeview">
          <a href="#">
            <i class="ti-smallcap"></i>
            <span>Icons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
            <li><a href="pages/icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
            <li><a href="pages/icons_material.html"><i class="ti-more"></i>Material Icons</a></li>	
            <li><a href="pages/icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
            <li><a href="pages/icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
            <li><a href="pages/icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
            <li><a href="pages/icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
            <li><a href="pages/icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
          </ul>
        </li> 		  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-palette"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/widgets_blog.html"><i class="ti-more"></i>Blog</a></li>
            <li><a href="pages/widgets_chart.html"><i class="ti-more"></i>Chart</a></li>
            <li><a href="pages/widgets.html"><i class="ti-more"></i>Widgets</a></li>
          </ul>
        </li>
		  
		
        <li class="header nav-small-cap">FORMS And TABLES</li> 
		
		
        <li class="treeview">
          <a href="#">
            <i class="ti-write"></i>
			<span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
            <li><a href="pages/forms_editors.html"><i class="ti-more"></i>Editors</a></li>
            <li><a href="pages/forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
            <li><a href="pages/forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
            <li><a href="pages/forms_general.html"><i class="ti-more"></i>General Elements</a></li>
            <li><a href="pages/forms_mask.html"><i class="ti-more"></i>Formatter</a></li>
            <li><a href="pages/forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-layout-grid4"></i>
			<span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
            <li><a href="pages/tables_data.html"><i class="ti-more"></i>Data tables</a></li>
          </ul>
        </li> 		  
		  
		<li class="header nav-small-cap">SAMPLE PAGES</li>			  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-shield"></i>
			<span>Authentication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/auth_login.html"><i class="ti-more"></i>Login</a></li>
            <li><a href="pages/auth_login2.html"><i class="ti-more"></i>Login 2</a></li>
			<li><a href="pages/auth_register.html"><i class="ti-more"></i>Register</a></li>
			<li><a href="pages/auth_register2.html"><i class="ti-more"></i>Register 2</a></li>
			<li><a href="pages/auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
			<li><a href="pages/auth_user_pass.html"><i class="ti-more"></i>Recover password</a></li>	
          </ul>
        </li> 		  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-alert"></i>
			<span>Error Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="pages/error_400.html"><i class="ti-more"></i>Error 400</a></li>
			<li><a href="pages/error_403.html"><i class="ti-more"></i>Error 403</a></li>
			<li><a href="pages/error_404.html"><i class="ti-more"></i>Error 404</a></li>
			<li><a href="pages/error_500.html"><i class="ti-more"></i>Error 500</a></li>
			<li><a href="pages/error_503.html"><i class="ti-more"></i>Error 503</a></li>
			<li><a href="pages/error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>	
          </ul>
        </li>   
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-files"></i>
			<span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/sample_blank.html"><i class="ti-more"></i>Blank</a></li>
            <li><a href="pages/sample_coming_soon.html"><i class="ti-more"></i>Coming Soon</a></li>
			<li><a href="pages/sample_pricing.html"><i class="ti-more"></i>Pricing</a></li>
			<li><a href="pages/sample_faq.html"><i class="ti-more"></i>FAQ</a></li>
            <li><a href="pages/email_index.html"><i class="ti-more"></i>Emails</a></li>
          </ul>
        </li>
		  
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-view-list"></i>
			<span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>  
        
      </ul>
    </section>
    <div class="sidebar-footer">
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
		<!-- item-->
		<a href="pages/mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
		<!-- item-->
		<a href="pages/auth_login.html" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto w-p50">
					<h3 class="page-title">Dashboard</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Control</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="right-title w-170">
					<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
						<span class="subheader_daterange-label">
							<span class="subheader_daterange-title"></span>
							<span class="subheader_daterange-date text-info"></span>
						</span>
						<a href="#" class="btn btn-sm btn-info">
							<i class="fa fa-angle-down"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
     		<div class="row">
				<div class="col-xl-3 col-md-6 col-12">
				  <div class="info-box">
					<span class="info-box-icon bg-info text-white"><i class="ion ion-stats-bars"></i></span>

					<div class="info-box-content">
					  <span class="info-box-number">90<small>%</small></span>
					  <span class="info-box-text">Store Traffic</span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				  <!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-xl-3 col-md-6 col-12">
				  <div class="info-box">
					<span class="info-box-icon bg-success text-white"><i class="ion ion-thumbsup"></i></span>

					<div class="info-box-content">
					  <span class="info-box-number">41,410</span>
					  <span class="info-box-text">User Likes</span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				  <!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-xl-3 col-md-6 col-12">
				  <div class="info-box">
					<span class="info-box-icon bg-primary text-white"><i class="ion ion-bag"></i></span>

					<div class="info-box-content">
					  <span class="info-box-number">760</span>
					  <span class="info-box-text">Monthly Sales</span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				  <!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-xl-3 col-md-6 col-12">
				  <div class="info-box">
					<span class="info-box-icon bg-danger text-white"><i class="ion ion-person-stalker"></i></span>

					<div class="info-box-content">
					  <span class="info-box-number">2,000</span>
					  <span class="info-box-text">Join Members</span>
					</div>
					<!-- /.info-box-content -->
				  </div>
				  <!-- /.info-box -->
				</div>
				<!-- /.col -->
		  
				<div class="col-12 col-xl-6">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">User Statistics</h4>
					</div>
					<div class="box-body">
					  <div class="chart" id="e_chart_1" style="height: 245px;"></div>

					  <ul class="flexbox flex-justified text-center my-10">
							<li>
							  <p class="mb-0">Traffic</p>
							  <div class="font-size-18 mb-5">4,122k</div>
							  <div class="font-size-16 text-success">
								<i class="fa fa-arrow-up pr-5"></i><span>+18%</span>
							  </div>
							</li>

							<li>
							  <p class="mb-0">Orders</p>
							  <div class="font-size-18 mb-5">8,512k</div>
							  <div class="font-size-16 text-success">
								<i class="fa fa-arrow-up pr-5"></i><span>+9%</span>
							  </div>
							</li>

							<li>
							  <p class="mb-0">Revenue</p>
							  <div class="font-size-18 mb-5">4,784k</div>
							  <div class="font-size-16 text-danger">
								<i class="fa fa-arrow-down pr-5"></i><span>-8%</span>
							  </div>
							</li>
						</ul>   
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
		  
				<div class="col-xl-6 col-12">
				  <!-- Chart -->
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Yeary Sales</h4>
					</div>
					<div class="box-body">
					  <div id="morris-area-chart" style="height: 340px;"></div>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				
				
				<div class="col-xl-4 col-12">		  

					<!-- Sparklines in colored card -->
					<div class="box bg-info">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">85.4%</h3>
								<div class="list-icons ml-auto">
									<div class="list-icons-item dropdown">
										<a href="#" class="list-icons-item dropdown-toggle text-white" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Update data</a>
											<a href="#" class="dropdown-item">Detailed log</a>
											<a href="#" class="dropdown-item">Statistics</a>
											<a href="#" class="dropdown-item">Clear list</a>
										</div>
									</div>
								</div>
							</div>

							<div>
								Current server loading
								<div class="font-size-16">85.6% avg</div>
							</div>
						</div>

						<div id="sparklines_color"></div>
					</div>
					<!-- /sparklines in colored card -->				

					<div class="box bg-danger">
						<div class="box-body">
							<div class="d-flex">
								<div class="mr-20 align-self-center">
									<h1 class="text-white">
										<i class="ti-pie-chart"></i>
									</h1>
								</div>
								<div>
									<h4 class="box-title">Bandwidth usage</h4>
									<h6 class="text-white">July 2018</h6>
								</div>

							</div>

							<div class="row mt-20 align-items-center">
								<div class="col-4">
									<h3 class="text-white">75 GB</h3>
								</div>
								<div class="col-8 text-right">
									<div class="bandwidth"></div>
								</div>
							</div>
						</div>
					</div>


				</div>  


				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Sales Overview</h4>
						</div>
						<div class="box-body">
							<div id="column-chart"></div>
						</div>
					</div>
				</div>  
				
				<div class="col-xl-8 col-12">					
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Social Campaigns</h4>
					</div>
					<div class="box-body">						
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th>Campaign</th>
										<th>Client</th>
										<th class="">Changes</th>
										<th class="">Budget</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="text-dark">Facebook</span></td>
										<td>Beavis</td>
										<td class=""><span class="text-success"><i class="ti-angle-up mr-10"></i><span>2.43%</span></span></td>
										<td class="">
											<span class="text-dark">$1478</span>
										</td>
										<td class="">
											<span class="label label-primary">Active</span>
										</td>
									</tr>									
									<tr>
										<td><span class="text-dark">Spotify</span></td>
										<td>Neosoft</td>
										<td><span class="text-success"><i class="ti-angle-up mr-10"></i><span>7.43%</span></span></td>
										<td>
											<span class="text-dark">$325</span>
										</td>
										<td>
											<span class="label label-default">Hold</span>
										</td>
									</tr>
									<tr>
										<td><span class="text-dark">Instagram</span></td>
										<td>Hencework</td>
										<td><span class="text-success"><i class="ti-angle-up mr-10"></i><span>9.43%</span></span></td>
										<td>
											<span class="text-dark">$258</span>
										</td>
										<td>
											<span class="label label-primary">Active</span>
										</td>
									</tr>
									<tr>
										<td><span class="text-dark">Youtube</span></td>
										<td>Felix</td>
										<td><span class="text-success"><i class="ti-angle-up mr-10"></i><span>1.43%</span></span></td>
										<td class="">
											<span class="text-dark">$951</span>
										</td>
										<td class="">
											<span class="label label-danger">Closed</span>
										</td>
									</tr>
									<tr>
										<td><span class="text-dark">Twitter</span></td>
										<td>Cannibus</td>
										<td><span class="text-danger"><i class="ti-angle-down mr-10"></i><span>-8.43%</span></span></td>
										<td>
											<span class="text-dark">$632</span>
										</td>
										<td class="">
											<span class="label label-default">Hold</span>
										</td>
									</tr>
									<tr>
										<td><span class="text-dark">Spotify</span></td>
										<td>Neosoft</td>
										<td><span class="text-success"><i class="ti-angle-up mr-10"></i><span>7.43%</span></span></td>
										<td>
											<span class="text-dark">$325</span>
										</td>
										<td>
											<span class="label label-default">Hold</span>
										</td>
									</tr>
									<tr>
										<td><span class="text-dark">Instagram</span></td>
										<td>Hencework</td>
										<td><span class="text-success"><i class="ti-angle-up mr-10"></i><span>9.43%</span></span></td>
										<td>
											<span class="text-dark">$258</span>
										</td>
										<td>
											<span class="label label-primary">Active</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
				</div>
				
				<div class="col-12 col-xl-4">
					<div class="box">
						<div class="box-inverse bg-primary">	
							<div class="box-header">
								<h4 class="box-title">Total Income</h4>
							</div>
							<div class="box-body py-40">
								<h1 class="text-center font-size-40 mt-0"><small>$</small>84,125,859</h1>
							</div>
						</div>
						<div class="box-body">
							<div class="text-center py-10 bb-1 bb-dashed">
							   <h4>Monthly Income</h4>
							   <ul class="flexbox flex-justified text-center my-20">
								<li class="br-1 px-10">
								  <h6 class="mb-0 text-bold">8952</h6>
								  <small>Abu Dhabi</small>
								</li>

								<li class="br-1 px-10">
								  <h6 class="mb-0 text-bold">7458</h6>
								  <small>Miami</small>
								</li>

								<li class="px-10">
								  <h6 class="mb-0 text-bold">3254</h6>
								  <small>London</small>
								</li>
							  </ul>						
							</div>
							<div class="text-center py-10">
							   <h4>Taxes info</h4>
							   <ul class="flexbox flex-justified text-center my-20">
								<li class="br-1 px-10">
								  <h6 class="mb-0 text-bold">8952</h6>
								  <small>Abu Dhabi</small>
								</li>

								<li class="br-1 px-10">
								  <h6 class="mb-0 text-bold">7458</h6>
								  <small>Miami</small>
								</li>

								<li class="px-10">
								  <h6 class="mb-0 text-bold">3254</h6>
								  <small>London</small>
								</li>
							  </ul>						
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
	  
	<div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>  
    <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Chat</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Slimscroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
		
	<!-- date-range-picker -->
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Morris.js charts -->
	<script src="../assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="../assets/vendor_components/morris.js/morris.min.js"></script>	
	
    <!-- eChart Plugins -->
    <script src="../assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
	
	<!-- Sparkline -->
	<script src="../assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	
    <!-- C3 Plugins -->
    <script src="../assets/vendor_components/c3/d3.min.js"></script>
    <script src="../assets/vendor_components/c3/c3.min.js"></script>
	
	<!-- Ekan Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Ekan Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard2.js"></script>
	<script src="js/pages/dashboard2-chart.js"></script>
	
	<!-- Ekan Admin for demo purposes -->
	<script src="js/demo.js"></script>	
	
	
</body>

<!-- Mirrored from ekan-admin-templates.multipurposethemes.com/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:13:48 GMT -->
</html>
