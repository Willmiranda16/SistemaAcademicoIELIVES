<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>EduAdmin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#"
                    class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent"
                    data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="{{asset('assets/images/logo-dark-text.png')}}" alt="logo"></span>
                        <span class="dark-logo"><img src="{{asset('assets/images/logo-light-text.png')}}" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                                role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon"
                                title="Chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon"
                                title="Mailbox">
                                <i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon"
                                title="Taskboard">
                                <i class="icon-Clipboard-check"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search"
                                                aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i
                                                        class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle"
                                data-bs-toggle="dropdown" title="Notifications">
                                <i class="icon-Notifications"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
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
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc
                                                suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu
                                                sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor
                                                commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et
                                                nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero
                                                dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam
                                                interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle"
                                data-bs-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i>
                                        My Wallet</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="ti-settings text-muted me-2"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting"
                                class="waves-effect waves-light">
                                <i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            @include('theme.menu')
            <div class="sidebar-footer">
                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span
                        class="icon-Settings-2"></span></a>
                <a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span
                        class="icon-Mail"></span></a>
                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span
                        class="icon-Lock-overturning"><span class="path1"></span><span
                            class="path2"></span></span></a>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row align-items-end">
                        <div class="col-xl-9 col-12">
                            <div class="box bg-primary-light pull-up">
                                <div class="box-body p-xl-0">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-3"><img
                                                src="{{asset('assets/images/svg-icon/color-svg/custom-14.svg')}}" alt=""></div>
                                        <div class="col-12 col-lg-9">
                                            <h2>Hello Johen, Welcome Back!</h2>
                                            <p class="text-dark mb-0 fs-16">
                                                Your course Overcoming the fear of public speaking was completed by 11
                                                New users this week!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-12">
                            <div class="box bg-transparent no-shadow">
                                <div class="box-body p-xl-0 text-center">
                                    <h3 class="px-30 mb-20">Have More<br>knoledge to share?</h3>
                                    <button type="button" class="waves-effect waves-light w-p100 btn btn-primary"><i
                                            class="fa fa-plus me-15"></i> Cheate New Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box no-shadow mb-0 bg-transparent">
                                <div class="box-header no-border px-0">
                                    <h4 class="box-title">Your Courses</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li>
                                            <button class="btn btn-primary-light px-10">View All</button>
                                        </li>
                                        <li class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary-light px-10"
                                                data-bs-toggle="dropdown" href="#" aria-expanded="false">Most
                                                Popular</button>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                <a class="dropdown-item active" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last week</a>
                                                <a class="dropdown-item" href="#">Last month</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="box bg-secondary-light pull-up"
                                style="background-image: url(../images/svg-icon/color-svg/st-1.svg); background-position: right bottom; background-repeat: no-repeat;">
                                <div class="box-body">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center pe-2 justify-content-between">
                                            <div class="d-flex">
                                                <span class="badge badge-primary me-15">Active</span>
                                                <span class="badge badge-primary me-5"><i
                                                        class="fa fa-lock"></i></span>
                                                <span class="badge badge-primary"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Import</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                        Export</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-printer"></i> Print</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-25 mb-5">It & software</h4>
                                        <p class="text-fade mb-0 fs-12">45 Days Left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="box bg-secondary-light pull-up"
                                style="background-image: url(../images/svg-icon/color-svg/st-2.svg); background-position: right bottom; background-repeat: no-repeat;">
                                <div class="box-body">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center pe-2 justify-content-between">
                                            <div class="d-flex">
                                                <span class="badge badge-dark me-15">Finished</span>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Import</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                        Export</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-printer"></i> Print</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-25 mb-5">Programming</h4>
                                        <p class="text-fade mb-0 fs-12">1 Days Left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="box bg-secondary-light pull-up"
                                style="background-image: url(../images/svg-icon/color-svg/st-3.svg); background-position: right bottom; background-repeat: no-repeat;">
                                <div class="box-body">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center pe-2 justify-content-between">
                                            <div class="d-flex">
                                                <span class="badge badge-primary me-15">Active</span>
                                                <span class="badge badge-primary me-5"><i
                                                        class="fa fa-lock"></i></span>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Import</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                        Export</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-printer"></i> Print</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-25 mb-5">Networking</h4>
                                        <p class="text-fade mb-0 fs-12">15 days Left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="box bg-secondary-light pull-up"
                                style="background-image: url(../images/svg-icon/color-svg/st-4.svg); background-position: right bottom; background-repeat: no-repeat;">
                                <div class="box-body">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center pe-2 justify-content-between">
                                            <div class="d-flex">
                                                <span class="badge badge-warning-light me-15">Paused</span>
                                                <span class="badge badge-warning-light me-5"><i
                                                        class="fa fa-lock"></i></span>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Import</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                        Export</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-printer"></i> Print</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-25 mb-5">Network Security</h4>
                                        <p class="text-fade mb-0 fs-12">21 Days Left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <p class="text-fade">Total Courses</p>
                                    <h3 class="mt-0 mb-20">19 <small class="text-success"><i
                                                class="fa fa-arrow-up ms-15 me-5"></i> 2 New</small></h3>
                                    <div id="charts_widget_2_chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <p class="text-fade">Hours spent</p>
                                    <h3 class="mt-0 mb-20">21 h 30 min <small class="text-danger"><i
                                                class="fa fa-arrow-down ms-25 me-5"></i> 15%</small></h3>
                                    <div id="charts_widget_1_chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Working Hours</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li class="dropdown">
                                            <button class="dropdown-toggle btn btn-warning-light px-10"
                                                data-bs-toggle="dropdown" href="#">Today</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item active" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last week</a>
                                                <a class="dropdown-item" href="#">Last month</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div id="revenue5"></div>
                                    <div class="d-flex justify-content-center">
                                        <p class="d-flex align-items-center fw-600 mx-20"><span
                                                class="badge badge-xl badge-dot badge-warning me-20"></span> Progress
                                        </p>
                                        <p class="d-flex align-items-center fw-600 mx-20"><span
                                                class="badge badge-xl badge-dot badge-primary me-20"></span> Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box no-shadow mb-0 bg-transparent">
                                <div class="box-header no-border px-0">
                                    <h4 class="box-title">Performance & Statistics</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li>
                                            <button class="btn btn-primary-light px-10">View All</button>
                                        </li>
                                        <li class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary-light px-10"
                                                data-bs-toggle="dropdown" href="#" aria-expanded="false">All
                                                Type</button>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                <a class="dropdown-item active" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last week</a>
                                                <a class="dropdown-item" href="#">Last month</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xl-8 col-12">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h4 class="box-title">Course completion</h4>
                                                    <ul class="box-controls pull-right d-md-flex d-none">
                                                        <li>
                                                            <button class="btn btn-primary-light px-10">View
                                                                All</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="box-body">
                                                    <div class="mb-30">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div class="w-p85">
                                                                <div class="progress progress-sm mb-0">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        role="progressbar" aria-valuenow="40"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 40%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>40%</div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <p class="mb-0 text-primary">In Progress</p>
                                                            <p class="text-fade mb-0">117 User</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-30">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div class="w-p85">
                                                                <div class="progress progress-sm mb-0">
                                                                    <div class="progress-bar progress-bar-success"
                                                                        role="progressbar" aria-valuenow="20"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 20%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>20%</div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <p class="mb-0 text-primary">Completed</p>
                                                            <p class="text-fade mb-0">74 User</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-30">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div class="w-p85">
                                                                <div class="progress progress-sm mb-0">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" aria-valuenow="18"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 18%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>18%</div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <p class="mb-0 text-primary">Inactive</p>
                                                            <p class="text-fade mb-0">58 User</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-5">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div class="w-p85">
                                                                <div class="progress progress-sm mb-0">
                                                                    <div class="progress-bar progress-bar-danger"
                                                                        role="progressbar" aria-valuenow="7"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 7%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>07%</div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <p class="mb-0 text-primary">Expeired</p>
                                                            <p class="text-fade mb-0">11 User</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-12">
                                            <div class="box bg-transparent no-shadow mb-20">
                                                <div class="box-header no-border pb-0">
                                                    <h4 class="box-title">Lessons</h4>
                                                    <ul class="box-controls pull-right d-md-flex d-none">
                                                        <li>
                                                            <button class="btn btn-primary-light px-10">View
                                                                All</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="box mb-15 pull-up">
                                                <div class="box-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="me-15 bg-warning h-50 w-50 l-h-60 rounded text-center">
                                                                <span class="icon-Book-open fs-24"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></span>
                                                            </div>
                                                            <div class="d-flex flex-column fw-500">
                                                                <a href="#"
                                                                    class="text-dark hover-primary mb-1 fs-16">Informatic
                                                                    Course</a>
                                                                <span class="text-fade">Johen Doe, 19 April</span>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <span class="icon-Arrow-right fs-24"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box mb-15 pull-up">
                                                <div class="box-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="me-15 bg-primary h-50 w-50 l-h-60 rounded text-center">
                                                                <span class="icon-Mail fs-24"></span>
                                                            </div>
                                                            <div class="d-flex flex-column fw-500">
                                                                <a href="#"
                                                                    class="text-dark hover-primary mb-1 fs-16">Live
                                                                    Drawing</a>
                                                                <span class="text-fade">Micak Doe, 12 June</span>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <span class="icon-Arrow-right fs-24"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box mb-0 pull-up">
                                                <div class="box-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="me-15 bg-danger h-50 w-50 l-h-60 rounded text-center">
                                                                <span class="icon-Book-open fs-24"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></span>
                                                            </div>
                                                            <div class="d-flex flex-column fw-500">
                                                                <a href="#"
                                                                    class="text-dark hover-primary mb-1 fs-16">Contemporary
                                                                    Art</a>
                                                                <span class="text-fade">Potar doe, 27 July</span>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <span class="icon-Arrow-right fs-24"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="box bg-transparent no-shadow mb-0">
                                                <div class="box-header no-border px-0">
                                                    <h4 class="box-title">Media for lessons</h4>
                                                    <div class="box-controls pull-right d-md-flex d-none">
                                                        <a href="#">View All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <div class="box-body py-10">
                                                    <div class="table-responsive">
                                                        <table class="table no-border mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="bg-danger h-50 w-50 l-h-50 rounded text-center">
                                                                            <p class="mb-0 fs-20 fw-600">A1</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="fw-600">Biology Course</td>
                                                                    <td class="text-fade">StarterReplacement.pdf</td>
                                                                    <td class="fw-500"><span
                                                                            class="badge badge-sm badge-dot badge-warning me-10"></span>Only
                                                                        view</td>
                                                                    <td class="text-fade">78 members</td>
                                                                    <td class="fw-600">47 MB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="bg-info h-50 w-50 l-h-50 rounded text-center">
                                                                            <p class="mb-0 fs-20 fw-600">B1</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="fw-600">Contemporary Art</td>
                                                                    <td class="text-fade">Loremipsum.doc</td>
                                                                    <td class="fw-500 text-warning"><span
                                                                            class="badge badge-sm badge-dot badge-warning me-10"></span>Edit
                                                                        available</td>
                                                                    <td class="text-fade">78 members</td>
                                                                    <td class="fw-600">78 MB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="bg-primary h-50 w-50 l-h-50 rounded text-center">
                                                                            <p class="mb-0 fs-20 fw-600">C1</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="fw-600">Programming Language</td>
                                                                    <td class="text-fade">phpcore.mp3</td>
                                                                    <td class="fw-500"><span
                                                                            class="badge badge-sm badge-dot badge-primary me-10"></span>Only
                                                                        view</td>
                                                                    <td class="text-fade">48 members</td>
                                                                    <td class="fw-600">12 MB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="bg-success h-50 w-50 l-h-50 rounded text-center">
                                                                            <p class="mb-0 fs-20 fw-600">A2</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="fw-600">Geometry Course</td>
                                                                    <td class="text-fade">dummyabz.pdf</td>
                                                                    <td class="fw-500"><span
                                                                            class="badge badge-sm badge-dot badge-primary me-10"></span>Only
                                                                        view</td>
                                                                    <td class="text-fade">24 members</td>
                                                                    <td class="fw-600">18 MB</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div id="calendar" class="dask evt-cal min-h-400"></div>
                                        </div>
                                    </div>
                                    <a href="#" class="box bg-danger bg-hover-danger pull-up">
                                        <div class="box-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                                    <span class="text-white icon-Cart2 fs-40"><span
                                                            class="path1"></span><span
                                                            class="path2"></span></span>
                                                </div>
                                                <div class="ms-10">
                                                    <h4 class="text-white mb-0">+1 1234 456 789</h4>
                                                    <h5 class="text-white-50 mb-0">Toll Free</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="box bg-primary bg-hover-primary pull-up">
                                        <div class="box-body">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                                    <span class="text-white icon-Mail fs-40"></span>
                                                </div>
                                                <div class="ms-10">
                                                    <h4 class="text-white mb-0">info@EduAdmin.com</h4>
                                                    <h5 class="text-white-50 mb-0">Free to Fill Us</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
                <ul
                    class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Now</a>
                    </li>
                </ul>
            </div>
            &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
                        class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i
                            class="mdi mdi-message-text"></i></a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i
                            class="mdi mdi-playlist-check"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey">
                            <i class="ti-more"></i>
                        </a>
                        <p>Users</p>
                        <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                        <input type="text" name="s" placeholder="Search" class="w-p100">
                    </div>
                    <div class="media-list media-list-hover mt-20">
                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="{{asset('assets/images/avatar/1.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="{{asset('assets/images/avatar/2.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="{{asset('assets/images/avatar/3.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="{{asset('assets/images/avatar/4.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="{{asset('assets/images/avatar/1.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="{{asset('assets/images/avatar/2.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="{{asset('assets/images/avatar/3.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="{{asset('assets/images/avatar/4.jpg')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="fs-16">
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
                        <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
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

    <!-- ./side demo panel -->
    <div class="sticky-toolbar">
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now"
            class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
            <span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
        </a>
        <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip"
            data-bs-placement="left" title="Portfolio"
            class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
            <span class="icon-Image"></span>
        </a>
        <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat"
            class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
            <span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
        </a>
    </div>
    <!-- Sidebar -->

    <div id="chat-box-body">
        <div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-30"><span class="path1"></span><span class="path2"></span></span>
        </div>

        <div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button
                        class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45"
                        type="button" data-bs-toggle="dropdown">
                        <span class="icon-Add-user fs-22"><span class="path1"></span><span
                                class="path2"></span></span>
                    </button>
                    <div class="dropdown-menu min-w-200">
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Color me-15"></span>
                            New Group</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Clipboard me-15"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></span>
                            Contacts</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Group me-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Groups</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Active-call me-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Calls</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Settings1 me-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Question-circle me-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Help</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Notifications me-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Privacy</a>
                    </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <a id="chat-box-toggle"
                        class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45"
                        href="#">
                        <span class="icon-Close fs-22"><span class="path1"></span><span
                                class="path2"></span></span>
                    </a>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="{{asset('assets/images/avatar/2.jpg')}}" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="{{asset('assets/images/avatar/3.jpg')}}" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                            My name is Anne Clarc.
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="{{asset('assets/images/avatar/2.jpg')}}" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..." />
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>

    <!-- EduAdmin App -->
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard3.js') }}"></script>
    <script src="{{ asset('assets/js/pages/calendar.js') }}"></script>

</body>

</html>
