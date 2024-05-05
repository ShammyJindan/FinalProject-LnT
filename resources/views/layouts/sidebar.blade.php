<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header sticky">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="index.html">
                        <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                            alt="logo">
                    </a>
                    <!-- LOGO -->
                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <div class="dropdown d-none">
                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                <i class="fe fe-search"></i>
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-start">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control" placeholder="Search....">
                                    <div class="input-group-text btn btn-primary">
                                        <i class="fe fe-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SEARCH -->
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                            aria-controls="navbarSupportedContent-4" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2">
                                    <div class="dropdown d-lg-none d-flex">
                                        <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                            <i class="fe fe-search"></i>
                                        </a>
                                        <div class="dropdown-menu header-search dropdown-menu-start">
                                            <div class="input-group w-100 p-2">
                                                <input type="text" class="form-control" placeholder="Search....">
                                                <div class="input-group-text btn btn-primary">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COUNTRY -->
                                    <div class="d-flex country">
                                        <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                            <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                            <span class="light-layout"><i class="fe fe-sun"></i></span>
                                        </a>
                                    </div>
                                    <!-- Theme Layout -->

                                    <div class="dropdown d-flex">
                                        <a class="nav-link icon full-screen-link nav-link-bg">
                                            <i class="fe fe-minimize fullscreen-button"></i>
                                        </a>
                                    </div>
                                    <!-- FULL-SCREEN -->
                                    <div class="dropdown  d-flex notifications">

                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <div class="drop-heading border-bottom">
                                                <div class="d-flex">
                                                    <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="notifications-menu">
                                                <a class="dropdown-item d-flex" href="notify-list.html">
                                                    <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                        <i class="fe fe-mail"></i>
                                                    </div>
                                                    <div class="mt-1 wd-80p">
                                                        <h5 class="notification-label mb-1">New Application received
                                                        </h5>
                                                        <span class="notification-subtext">3 days ago</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="notify-list.html">
                                                    <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                        <i class="fe fe-check-circle"></i>
                                                    </div>
                                                    <div class="mt-1 wd-80p">
                                                        <h5 class="notification-label mb-1">Project has been
                                                            approved</h5>
                                                        <span class="notification-subtext">2 hours ago</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="notify-list.html">
                                                    <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                        <i class="fe fe-shopping-cart"></i>
                                                    </div>
                                                    <div class="mt-1 wd-80p">
                                                        <h5 class="notification-label mb-1">Your Product Delivered
                                                        </h5>
                                                        <span class="notification-subtext">30 min ago</span>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="notify-list.html">
                                                    <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                        <i class="fe fe-user-plus"></i>
                                                    </div>
                                                    <div class="mt-1 wd-80p">
                                                        <h5 class="notification-label mb-1">Friend Requests</h5>
                                                        <span class="notification-subtext">1 day ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown-divider m-0"></div>
                                            <a href="notify-list.html"
                                                class="dropdown-item text-center p-3 text-muted">View all
                                                Notification</a>
                                        </div>
                                    </div>

                                    <!-- SIDE-MENU -->
                                    <div class="dropdown d-flex profile-1">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                            {{-- <span src="" class="avatar avatar-md brround" style="background: #f0ecc0">SJ</span> --}}
                                            <img src="{{asset('assets/images/users/22.jpg')}}" alt="img" class="avatar avatar-md brround">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="demo-icon nav-link icon">
                            <i class="fe fe-settings fa-spin  text_primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header">
                    <h3>Final Project <br>Shammy H Jindan</h3>
                </div>
                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>

                    <ul class="side-menu">
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Halaman Data Barang</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/APP-SIDEBAR-->
        </div>

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">
