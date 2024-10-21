<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Color Mode | AdminLTE 4</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Color Mode | AdminLTE 4">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)-->
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="../../../dist/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                        </h3>
                                        <p class="fs-7">Call me whenever you can...</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="../../../dist/assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i> </span>
                                        </h3>
                                        <p class="fs-7">I got your message bro</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="../../../dist/assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i> </span>
                                        </h3>
                                        <p class="fs-7">The subject goes here</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li> <!--end::Messages Dropdown Menu--> <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="../../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="../../../dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            <li class="user-body"> <!--begin::Row-->
                                <div class="row">
                                    <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                </div> <!--end::Row-->
                            </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                            <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="../../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../index.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard v1</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard v2</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard v3</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="../generate/theme.html" class="nav-link"> <i class="nav-icon bi bi-palette"></i>
                                <p>Theme Generate</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                                <p>
                                    Widgets
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../widgets/small-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Small Box</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../widgets/info-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>info Box</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Cards</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                    Layout Options
                                    <span class="nav-badge badge text-bg-secondary me-3">6</span> <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Default Sidebar</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../layout/fixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Fixed Sidebar</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../layout/layout-custom-area.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Layout <small>+ Custom Area </small></p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../layout/sidebar-mini.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Sidebar Mini</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../layout/collapsed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Sidebar Mini <small>+ Collapsed</small></p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../layout/logo-switch.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Sidebar Mini <small>+ Logo Switch</small></p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../layout/layout-rtl.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Layout RTL</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                                <p>
                                    UI Elements
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../UI/general.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>General</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../UI/icons.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Icons</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../UI/timeline.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Timeline</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                                <p>
                                    Forms
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../forms/general.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>General Elements</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                                <p>
                                    Tables
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../tables/simple.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Simple Tables</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Auth
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                        <p>
                                            Version 1
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item"> <a href="../examples/login.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                                <p>Login</p>
                                            </a> </li>
                                        <li class="nav-item"> <a href="../examples/register.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                                <p>Register</p>
                                            </a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                        <p>
                                            Version 2
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item"> <a href="../examples/login-v2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                                <p>Login</p>
                                            </a> </li>
                                        <li class="nav-item"> <a href="../examples/register-v2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                                <p>Register</p>
                                            </a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a href="../examples/lockscreen.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Lockscreen</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-header">DOCUMENTATIONS</li>
                        <li class="nav-item"> <a href="../docs/introduction.html" class="nav-link"> <i class="nav-icon bi bi-download"></i>
                                <p>Installation</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../docs/layout.html" class="nav-link"> <i class="nav-icon bi bi-grip-horizontal"></i>
                                <p>Layout</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../docs/color-mode.html" class="nav-link active"> <i class="nav-icon bi bi-star-half"></i>
                                <p>Color Mode</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-ui-checks-grid"></i>
                                <p>
                                    Components
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../docs/components/main-header.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Main Header</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../docs/components/main-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Main Sidebar</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-filetype-js"></i>
                                <p>
                                    Javascript
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../docs/javascript/treeview.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Treeview</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="../docs/browser-support.html" class="nav-link"> <i class="nav-icon bi bi-browser-edge"></i>
                                <p>Browser Support</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../docs/how-to-contribute.html" class="nav-link"> <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                                <p>How To Contribute</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../docs/faq.html" class="nav-link"> <i class="nav-icon bi bi-question-circle-fill"></i>
                                <p>FAQ</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../docs/license.html" class="nav-link"> <i class="nav-icon bi bi-patch-check-fill"></i>
                                <p>License</p>
                            </a> </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                                <p>Level 1</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                                <p>
                                    Level 1
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Level 2</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>
                                            Level 2
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Level 3</p>
                                            </a> </li>
                                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Level 3</p>
                                            </a> </li>
                                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                                <p>Level 3</p>
                                            </a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Level 2</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                                <p>Level 1</p>
                            </a> </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                <p class="text">Important</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                <p>Warning</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                <p>Informational</p>
                            </a> </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Color Mode Toggle</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Color Mode
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5 class="fw-bold">Tips</h5>
                                <p> <a href="https://getbootstrap.com/docs/5.3/customize/color-modes/" target="_blank" rel="noopener noreferrer" class="callout-link">
                                        Color modes in Bootstrap
                                    </a> allow you to switch between light and dark modes. You can do this using the data-bs-theme attribute. You can also create your own custom color modes.
                                </p>
                            </div>
                        </div> <!-- Start column -->
                        <div class="col-12"> <!--begin::Header-->
                            <nav class="navbar navbar-expand bg-body"> <!--begin::Container-->
                                <div class="container-fluid"> <!--begin::Start Navbar links-->
                                    <ul class="navbar-nav">
                                        <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a> </li>
                                        <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                                        <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
                                    </ul> <!--end::Start Navbar links--> <!--begin::End Navbar links-->
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item dropdown"> <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static"> <span class="theme-icon-active"> <i class="my-1"></i> </span> <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span> </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text" style="--bs-dropdown-min-width: 8rem;">
                                                <li> <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="false"> <i class="bi bi-sun-fill me-2"></i>
                                                        Light
                                                        <i class="bi bi-check-lg ms-auto d-none"></i> </button> </li>
                                                <li> <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false"> <i class="bi bi-moon-fill me-2"></i>
                                                        Dark
                                                        <i class="bi bi-check-lg ms-auto d-none"></i> </button> </li>
                                                <li> <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="true"> <i class="bi bi-circle-fill-half-stroke me-2"></i>
                                                        Auto
                                                        <i class="bi bi-check-lg ms-auto d-none"></i> </button> </li>
                                            </ul>
                                        </li>
                                    </ul> <!--end::End Navbar links-->
                                </div> <!--end::Container-->
                            </nav> <!--end::Header-->
                        </div> <!-- Start column -->
                        <div class="col-12">
                            <pre class="astro-code dark-plus" style="background-color:#1E1E1E;color:#D4D4D4;overflow-x:auto" tabindex="0" data-language="html"><code><span class="line"><span style="color:#6A9955">&lt;!--begin::Header--&gt;</span></span>
<span class="line"><span style="color:#808080">&lt;</span><span style="color:#569CD6">nav</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;navbar navbar-expand bg-body&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#6A9955">  &lt;!--begin::Container--&gt;</span></span>
<span class="line"><span style="color:#808080">  &lt;</span><span style="color:#569CD6">div</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;container-fluid&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#6A9955">    &lt;!--begin::Start Navbar links--&gt;</span></span>
<span class="line"><span style="color:#808080">    &lt;</span><span style="color:#569CD6">ul</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;navbar-nav&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;</span><span style="color:#569CD6">li</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-item&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;</span><span style="color:#569CD6">a</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-link&quot;</span><span style="color:#9CDCFE"> data-lte-toggle</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;sidebar&quot;</span><span style="color:#9CDCFE"> href</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;#&quot;</span><span style="color:#9CDCFE"> role</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;button&quot;</span></span>
<span class="line"><span style="color:#808080">          &gt;&lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-list&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span></span>
<span class="line"><span style="color:#808080">        &gt;&lt;/</span><span style="color:#569CD6">a</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;</span><span style="color:#569CD6">li</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-item d-none d-md-block&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;</span><span style="color:#569CD6">a</span><span style="color:#9CDCFE"> href</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;#&quot;</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-link&quot;</span><span style="color:#808080">&gt;</span><span style="color:#D4D4D4">Home</span><span style="color:#808080">&lt;/</span><span style="color:#569CD6">a</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;</span><span style="color:#569CD6">li</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-item d-none d-md-block&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;</span><span style="color:#569CD6">a</span><span style="color:#9CDCFE"> href</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;#&quot;</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-link&quot;</span><span style="color:#808080">&gt;</span><span style="color:#D4D4D4">Contact</span><span style="color:#808080">&lt;/</span><span style="color:#569CD6">a</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">    &lt;/</span><span style="color:#569CD6">ul</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#6A9955">    &lt;!--end::Start Navbar links--&gt;</span></span>
<span class="line"><span style="color:#6A9955">    &lt;!--begin::End Navbar links--&gt;</span></span>
<span class="line"><span style="color:#808080">    &lt;</span><span style="color:#569CD6">ul</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;navbar-nav ms-auto&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;</span><span style="color:#569CD6">li</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;nav-item dropdown&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;</span><span style="color:#569CD6">button</span></span>
<span class="line"><span style="color:#9CDCFE">          class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          id</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bd-theme&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          type</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;button&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          aria-expanded</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;false&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          data-bs-toggle</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;dropdown&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          data-bs-display</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;static&quot;</span></span>
<span class="line"><span style="color:#808080">        &gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;</span><span style="color:#569CD6">span</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;theme-icon-active&quot;</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;my-1&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;/</span><span style="color:#569CD6">span</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;</span><span style="color:#569CD6">span</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;d-lg-none ms-2&quot;</span><span style="color:#9CDCFE"> id</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bd-theme-text&quot;</span><span style="color:#808080">&gt;</span><span style="color:#D4D4D4">Toggle theme</span><span style="color:#808080">&lt;/</span><span style="color:#569CD6">span</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;/</span><span style="color:#569CD6">button</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;</span><span style="color:#569CD6">ul</span></span>
<span class="line"><span style="color:#9CDCFE">          class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;dropdown-menu dropdown-menu-end&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          aria-labelledby</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bd-theme-text&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">          style</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;--bs-dropdown-min-width: 8rem;&quot;</span></span>
<span class="line"><span style="color:#808080">        &gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;</span><span style="color:#569CD6">button</span></span>
<span class="line"><span style="color:#9CDCFE">              type</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;button&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;dropdown-item d-flex align-items-center active&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              data-bs-theme-value</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;light&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              aria-pressed</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;false&quot;</span></span>
<span class="line"><span style="color:#808080">            &gt;</span></span>
<span class="line"><span style="color:#808080">              &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-sun-fill me-2&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#D4D4D4">              Light</span></span>
<span class="line"><span style="color:#808080">              &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-check-lg ms-auto d-none&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;/</span><span style="color:#569CD6">button</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;</span><span style="color:#569CD6">button</span></span>
<span class="line"><span style="color:#9CDCFE">              type</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;button&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;dropdown-item d-flex align-items-center&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              data-bs-theme-value</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;dark&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              aria-pressed</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;false&quot;</span></span>
<span class="line"><span style="color:#808080">            &gt;</span></span>
<span class="line"><span style="color:#808080">              &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-moon-fill me-2&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#D4D4D4">              Dark</span></span>
<span class="line"><span style="color:#808080">              &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-check-lg ms-auto d-none&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;/</span><span style="color:#569CD6">button</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;</span><span style="color:#569CD6">button</span></span>
<span class="line"><span style="color:#9CDCFE">              type</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;button&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;dropdown-item d-flex align-items-center&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              data-bs-theme-value</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;auto&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">              aria-pressed</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;true&quot;</span></span>
<span class="line"><span style="color:#808080">            &gt;</span></span>
<span class="line"><span style="color:#808080">              &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-circle-fill-half-stroke me-2&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#D4D4D4">              Auto</span></span>
<span class="line"><span style="color:#808080">              &lt;</span><span style="color:#569CD6">i</span><span style="color:#9CDCFE"> class</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;bi bi-check-lg ms-auto d-none&quot;</span><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">i</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">            &lt;/</span><span style="color:#569CD6">button</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">          &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">        &lt;/</span><span style="color:#569CD6">ul</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">      &lt;/</span><span style="color:#569CD6">li</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#808080">    &lt;/</span><span style="color:#569CD6">ul</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#6A9955">    &lt;!--end::End Navbar links--&gt;</span></span>
<span class="line"><span style="color:#808080">  &lt;/</span><span style="color:#569CD6">div</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#6A9955">  &lt;!--end::Container--&gt;</span></span>
<span class="line"><span style="color:#808080">&lt;/</span><span style="color:#569CD6">nav</span><span style="color:#808080">&gt;</span></span>
<span class="line"><span style="color:#6A9955">&lt;!--end::Header--&gt;</span></span>
<span class="line"></span></code></pre>
                            <pre class="astro-code dark-plus" style="background-color:#1E1E1E;color:#D4D4D4;overflow-x:auto" tabindex="0" data-language="js"><code><span class="line"><span style="color:#6A9955">// Color Mode Toggler</span></span>
<span class="line"><span style="color:#D4D4D4">(() </span><span style="color:#569CD6">=&gt;</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#CE9178">  &quot;use strict&quot;</span><span style="color:#D4D4D4">;</span></span>
<span class="line"></span>
<span class="line"><span style="color:#569CD6">  const</span><span style="color:#4FC1FF"> storedTheme</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">localStorage</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">getItem</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;theme&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"></span>
<span class="line"><span style="color:#569CD6">  const</span><span style="color:#DCDCAA"> getPreferredTheme</span><span style="color:#D4D4D4"> = () </span><span style="color:#569CD6">=&gt;</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#C586C0">    if</span><span style="color:#D4D4D4"> (</span><span style="color:#9CDCFE">storedTheme</span><span style="color:#D4D4D4">) {</span></span>
<span class="line"><span style="color:#C586C0">      return</span><span style="color:#9CDCFE"> storedTheme</span><span style="color:#D4D4D4">;</span></span>
<span class="line"><span style="color:#D4D4D4">    }</span></span>
<span class="line"></span>
<span class="line"><span style="color:#C586C0">    return</span><span style="color:#9CDCFE"> window</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">matchMedia</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;(prefers-color-scheme: dark)&quot;</span><span style="color:#D4D4D4">).</span><span style="color:#9CDCFE">matches</span></span>
<span class="line"><span style="color:#D4D4D4">      ? </span><span style="color:#CE9178">&quot;dark&quot;</span></span>
<span class="line"><span style="color:#D4D4D4">      : </span><span style="color:#CE9178">&quot;light&quot;</span><span style="color:#D4D4D4">;</span></span>
<span class="line"><span style="color:#D4D4D4">  };</span></span>
<span class="line"></span>
<span class="line"><span style="color:#569CD6">  const</span><span style="color:#DCDCAA"> setTheme</span><span style="color:#D4D4D4"> = </span><span style="color:#569CD6">function</span><span style="color:#D4D4D4"> (</span><span style="color:#9CDCFE">theme</span><span style="color:#D4D4D4">) {</span></span>
<span class="line"><span style="color:#C586C0">    if</span><span style="color:#D4D4D4"> (</span></span>
<span class="line"><span style="color:#9CDCFE">      theme</span><span style="color:#D4D4D4"> === </span><span style="color:#CE9178">&quot;auto&quot;</span><span style="color:#D4D4D4"> &amp;&amp;</span></span>
<span class="line"><span style="color:#9CDCFE">      window</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">matchMedia</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;(prefers-color-scheme: dark)&quot;</span><span style="color:#D4D4D4">).</span><span style="color:#9CDCFE">matches</span></span>
<span class="line"><span style="color:#D4D4D4">    ) {</span></span>
<span class="line"><span style="color:#9CDCFE">      document</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">documentElement</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;data-bs-theme&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#CE9178">&quot;dark&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#D4D4D4">    } </span><span style="color:#C586C0">else</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#9CDCFE">      document</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">documentElement</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;data-bs-theme&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#9CDCFE">theme</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#D4D4D4">    }</span></span>
<span class="line"><span style="color:#D4D4D4">  };</span></span>
<span class="line"></span>
<span class="line"><span style="color:#DCDCAA">  setTheme</span><span style="color:#D4D4D4">(</span><span style="color:#DCDCAA">getPreferredTheme</span><span style="color:#D4D4D4">());</span></span>
<span class="line"></span>
<span class="line"><span style="color:#569CD6">  const</span><span style="color:#DCDCAA"> showActiveTheme</span><span style="color:#D4D4D4"> = (</span><span style="color:#9CDCFE">theme</span><span style="color:#D4D4D4">, </span><span style="color:#9CDCFE">focus</span><span style="color:#D4D4D4"> = </span><span style="color:#569CD6">false</span><span style="color:#D4D4D4">) </span><span style="color:#569CD6">=&gt;</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#569CD6">    const</span><span style="color:#4FC1FF"> themeSwitcher</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">document</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelector</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;#bd-theme&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"></span>
<span class="line"><span style="color:#C586C0">    if</span><span style="color:#D4D4D4"> (!</span><span style="color:#9CDCFE">themeSwitcher</span><span style="color:#D4D4D4">) {</span></span>
<span class="line"><span style="color:#C586C0">      return</span><span style="color:#D4D4D4">;</span></span>
<span class="line"><span style="color:#D4D4D4">    }</span></span>
<span class="line"></span>
<span class="line"><span style="color:#569CD6">    const</span><span style="color:#4FC1FF"> themeSwitcherText</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">document</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelector</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;#bd-theme-text&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#569CD6">    const</span><span style="color:#4FC1FF"> activeThemeIcon</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">document</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelector</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;.theme-icon-active i&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#569CD6">    const</span><span style="color:#4FC1FF"> btnToActive</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">document</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelector</span><span style="color:#D4D4D4">(</span></span>
<span class="line"><span style="color:#CE9178">      `[data-bs-theme-value=&quot;</span><span style="color:#569CD6">${</span><span style="color:#9CDCFE">theme</span><span style="color:#569CD6">}</span><span style="color:#CE9178">&quot;]`</span></span>
<span class="line"><span style="color:#D4D4D4">    );</span></span>
<span class="line"><span style="color:#569CD6">    const</span><span style="color:#4FC1FF"> svgOfActiveBtn</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">btnToActive</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelector</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;i&quot;</span><span style="color:#D4D4D4">).</span><span style="color:#DCDCAA">getAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;class&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"></span>
<span class="line"><span style="color:#C586C0">    for</span><span style="color:#D4D4D4"> (</span><span style="color:#569CD6">const</span><span style="color:#4FC1FF"> element</span><span style="color:#569CD6"> of</span><span style="color:#9CDCFE"> document</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelectorAll</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;[data-bs-theme-value]&quot;</span><span style="color:#D4D4D4">)) {</span></span>
<span class="line"><span style="color:#9CDCFE">      element</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">classList</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">remove</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;active&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#9CDCFE">      element</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;aria-pressed&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#CE9178">&quot;false&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#D4D4D4">    }</span></span>
<span class="line"></span>
<span class="line"><span style="color:#9CDCFE">    btnToActive</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">classList</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">add</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;active&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#9CDCFE">    btnToActive</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;aria-pressed&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#CE9178">&quot;true&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#9CDCFE">    activeThemeIcon</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;class&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#9CDCFE">svgOfActiveBtn</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#569CD6">    const</span><span style="color:#4FC1FF"> themeSwitcherLabel</span><span style="color:#D4D4D4"> = </span><span style="color:#CE9178">`</span><span style="color:#569CD6">${</span><span style="color:#9CDCFE">themeSwitcherText</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">textContent</span><span style="color:#569CD6">}</span><span style="color:#CE9178"> (</span><span style="color:#569CD6">${</span><span style="color:#9CDCFE">btnToActive</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">dataset</span><span style="color:#D4D4D4">.</span><span style="color:#9CDCFE">bsThemeValue</span><span style="color:#569CD6">}</span><span style="color:#CE9178">)`</span><span style="color:#D4D4D4">;</span></span>
<span class="line"><span style="color:#9CDCFE">    themeSwitcher</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;aria-label&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#9CDCFE">themeSwitcherLabel</span><span style="color:#D4D4D4">);</span></span>
<span class="line"></span>
<span class="line"><span style="color:#C586C0">    if</span><span style="color:#D4D4D4"> (</span><span style="color:#9CDCFE">focus</span><span style="color:#D4D4D4">) {</span></span>
<span class="line"><span style="color:#9CDCFE">      themeSwitcher</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">focus</span><span style="color:#D4D4D4">();</span></span>
<span class="line"><span style="color:#D4D4D4">    }</span></span>
<span class="line"><span style="color:#D4D4D4">  };</span></span>
<span class="line"></span>
<span class="line"><span style="color:#9CDCFE">  window</span></span>
<span class="line"><span style="color:#D4D4D4">    .</span><span style="color:#DCDCAA">matchMedia</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;(prefers-color-scheme: dark)&quot;</span><span style="color:#D4D4D4">)</span></span>
<span class="line"><span style="color:#D4D4D4">    .</span><span style="color:#DCDCAA">addEventListener</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;change&quot;</span><span style="color:#D4D4D4">, () </span><span style="color:#569CD6">=&gt;</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#C586C0">      if</span><span style="color:#D4D4D4"> (</span><span style="color:#9CDCFE">storedTheme</span><span style="color:#D4D4D4"> !== </span><span style="color:#CE9178">&quot;light&quot;</span><span style="color:#D4D4D4"> || </span><span style="color:#9CDCFE">storedTheme</span><span style="color:#D4D4D4"> !== </span><span style="color:#CE9178">&quot;dark&quot;</span><span style="color:#D4D4D4">) {</span></span>
<span class="line"><span style="color:#DCDCAA">        setTheme</span><span style="color:#D4D4D4">(</span><span style="color:#DCDCAA">getPreferredTheme</span><span style="color:#D4D4D4">());</span></span>
<span class="line"><span style="color:#D4D4D4">      }</span></span>
<span class="line"><span style="color:#D4D4D4">    });</span></span>
<span class="line"></span>
<span class="line"><span style="color:#9CDCFE">  window</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">addEventListener</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;DOMContentLoaded&quot;</span><span style="color:#D4D4D4">, () </span><span style="color:#569CD6">=&gt;</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#DCDCAA">    showActiveTheme</span><span style="color:#D4D4D4">(</span><span style="color:#DCDCAA">getPreferredTheme</span><span style="color:#D4D4D4">());</span></span>
<span class="line"></span>
<span class="line"><span style="color:#C586C0">    for</span><span style="color:#D4D4D4"> (</span><span style="color:#569CD6">const</span><span style="color:#4FC1FF"> toggle</span><span style="color:#569CD6"> of</span><span style="color:#9CDCFE"> document</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">querySelectorAll</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;[data-bs-theme-value]&quot;</span><span style="color:#D4D4D4">)) {</span></span>
<span class="line"><span style="color:#9CDCFE">      toggle</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">addEventListener</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;click&quot;</span><span style="color:#D4D4D4">, () </span><span style="color:#569CD6">=&gt;</span><span style="color:#D4D4D4"> {</span></span>
<span class="line"><span style="color:#569CD6">        const</span><span style="color:#4FC1FF"> theme</span><span style="color:#D4D4D4"> = </span><span style="color:#9CDCFE">toggle</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">getAttribute</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;data-bs-theme-value&quot;</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#9CDCFE">        localStorage</span><span style="color:#D4D4D4">.</span><span style="color:#DCDCAA">setItem</span><span style="color:#D4D4D4">(</span><span style="color:#CE9178">&quot;theme&quot;</span><span style="color:#D4D4D4">, </span><span style="color:#9CDCFE">theme</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#DCDCAA">        setTheme</span><span style="color:#D4D4D4">(</span><span style="color:#9CDCFE">theme</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#DCDCAA">        showActiveTheme</span><span style="color:#D4D4D4">(</span><span style="color:#9CDCFE">theme</span><span style="color:#D4D4D4">, </span><span style="color:#569CD6">true</span><span style="color:#D4D4D4">);</span></span>
<span class="line"><span style="color:#D4D4D4">      });</span></span>
<span class="line"><span style="color:#D4D4D4">    }</span></span>
<span class="line"><span style="color:#D4D4D4">  });</span></span>
<span class="line"><span style="color:#D4D4D4">})();</span></span>
<span class="line"></span></code></pre>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
                Copyright &copy; 2014-2024&nbsp;
                <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure-->
    <script>
        // Color Mode Toggler
        (() => {
            "use strict";

            const storedTheme = localStorage.getItem("theme");

            const getPreferredTheme = () => {
                if (storedTheme) {
                    return storedTheme;
                }

                return window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
            };

            const setTheme = function(theme) {
                if (
                    theme === "auto" &&
                    window.matchMedia("(prefers-color-scheme: dark)").matches
                ) {
                    document.documentElement.setAttribute("data-bs-theme", "dark");
                } else {
                    document.documentElement.setAttribute("data-bs-theme", theme);
                }
            };

            setTheme(getPreferredTheme());

            const showActiveTheme = (theme, focus = false) => {
                const themeSwitcher = document.querySelector("#bd-theme");

                if (!themeSwitcher) {
                    return;
                }

                const themeSwitcherText = document.querySelector("#bd-theme-text");
                const activeThemeIcon = document.querySelector(
                    ".theme-icon-active i"
                );
                const btnToActive = document.querySelector(
                    `[data-bs-theme-value="${theme}"]`
                );
                const svgOfActiveBtn = btnToActive
                    .querySelector("i")
                    .getAttribute("class");

                for (const element of document.querySelectorAll(
                        "[data-bs-theme-value]"
                    )) {
                    element.classList.remove("active");
                    element.setAttribute("aria-pressed", "false");
                }

                btnToActive.classList.add("active");
                btnToActive.setAttribute("aria-pressed", "true");
                activeThemeIcon.setAttribute("class", svgOfActiveBtn);
                const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
                themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

                if (focus) {
                    themeSwitcher.focus();
                }
            };

            window
                .matchMedia("(prefers-color-scheme: dark)")
                .addEventListener("change", () => {
                    if (storedTheme !== "light" || storedTheme !== "dark") {
                        setTheme(getPreferredTheme());
                    }
                });

            window.addEventListener("DOMContentLoaded", () => {
                showActiveTheme(getPreferredTheme());

                for (const toggle of document.querySelectorAll(
                        "[data-bs-theme-value]"
                    )) {
                    toggle.addEventListener("click", () => {
                        const theme = toggle.getAttribute("data-bs-theme-value");
                        localStorage.setItem("theme", theme);
                        setTheme(theme);
                        showActiveTheme(theme, true);
                    });
                }
            });
        })();
    </script> <!--end::Script-->
</body><!--end::Body-->

</html>