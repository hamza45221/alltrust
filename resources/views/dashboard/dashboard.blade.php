<!doctype html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="public/assets/"
    data-template="vertical-menu-template"
    data-style="light">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="public/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="public/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="public/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="public/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="public/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="public/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="public/assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="public/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="public/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="public/assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="public/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="public/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="public/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="public/assets/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="public/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="public/assets/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="public/assets/js/config.js"></script>

    <style>

        .app-brand-logo.demo {
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -ms-flexbox;
            display: flex;
            width: 180px;
            height: 68px;
        }
        .dark-style .menu .app-brand.demo {
            height: 120px;
        }
    </style>


</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo ">
                    <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                               <img src="{{url('public/assets/Logo.png')}}" alt="Taxi-Link Logo" width="100%" height="100px"/>
              </span>
{{--                    <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>--}}
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
                    <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">

                <li class="menu-item active open">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                        <div data-i18n="Adviser">Adviser</div>

                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item active">
                            <a href="index.html" class="menu-link">
                                <div data-i18n="Users">New Users</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Dashboards -->
                <li class="menu-item ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                        <div data-i18n="Adviser">Adviser</div>

                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item ">
                            <a href="index.html" class="menu-link">
                                <div data-i18n="New Adviser">New Adviser</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboards-crm.html" class="menu-link">
                                <div data-i18n="Pending Adviser">Pending Adviser </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-dashboard.html" class="menu-link">
                                <div data-i18n="Existing Adviser">Existing Adviser</div>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Layouts -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                        <div data-i18n="Members">Members</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="layouts-collapsed-menu.html" class="menu-link">
                                <div data-i18n="Create Oasis SIPP">Create Oasis SIPP</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-content-navbar.html" class="menu-link">
                                <div data-i18n="Create Full SIPP Property">Create Full SIPP Property</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                                <div data-i18n="Create FPT">Create FPT</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/horizontal-menu-template" class="menu-link" target="_blank">
                                <div data-i18n="Illustration">Illustration</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-without-menu.html" class="menu-link">
                                <div data-i18n="Pending Appliction">Pending Appliction</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-without-navbar.html" class="menu-link">
                                <div data-i18n="Existing Member Applications">Existing Member Applications</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="layouts-fluid.html" class="menu-link">
                                <div data-i18n="Member Details">Member Details</div>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Management -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-files"></i>
                        <div data-i18n="Management">Management</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="../html/front-pages/landing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Leads">Leads</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/front-pages/pricing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="User Management">User Management</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/front-pages/payment-page.html" class="menu-link" target="_blank">
                                <div data-i18n="DMS">DMS</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/front-pages/checkout-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Reports">Reports</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/front-pages/help-center-landing.html" class="menu-link" target="_blank">
                                <div data-i18n="WorkFLow">WorkFLow</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Support -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-files"></i>
                        <div data-i18n="Support">Support</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="../html/front-pages/landing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Tickets">Tickets</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/front-pages/pricing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="FQA">FQA</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Marketing Management -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-files"></i>
                        <div data-i18n="Marketing Management">Marketing Management</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="../html/front-pages/landing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Communications">Communications</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Adviser Application -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-files"></i>
                        <div data-i18n="Adviser Application">Adviser Application</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="../html/front-pages/landing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Adviser Application">Adviser Application</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../html/front-pages/pricing-page.html" class="menu-link" target="_blank">
                                <div data-i18n="Member Application">Member Application</div>
                            </a>
                        </li>

                    </ul>
                </li>



            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="ti ti-menu-2 ti-md"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                                <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                                <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Language -->
                        <li class="nav-item dropdown-language dropdown">
                            <a
                                class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-language rounded-circle ti-md"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                                        <span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                                        <span>French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                                        <span>Arabic</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                                        <span>German</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Language -->

                        <!-- Style Switcher -->
                        {{--                        <li class="nav-item dropdown-style-switcher dropdown">--}}

                        {{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">--}}
                        {{--                                <li>--}}
                        {{--                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">--}}
                        {{--                                        <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        <!-- / Style Switcher-->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a
                                class="nav-link dropdown-toggle hide-arrow p-0"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="public/assets/img/avatars/1.png" alt class="rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar avatar-online">
                                                    <img src="public/assets/img/avatars/1.png" alt class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">John Doe</h6>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <div class="d-grid px-2 pt-2 pb-1">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <button class="btn btn-sm btn-danger d-flex" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <small class="align-middle">Logout</small>
                                        <i class="ti ti-logout ms-2 ti-14px"></i>
                                    </button>
                                </div>

                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>

                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper d-none">
                    <input
                        type="text"
                        class="form-control search-input container-xxl border-0"
                        placeholder="Search..."
                        aria-label="Search..." />
                    <i class="ti ti-x search-toggler cursor-pointer"></i>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    @yield('content')

                </div>

                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">

                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="public/assets/vendor/libs/jquery/jquery.js"></script>
<script src="public/assets/vendor/libs/popper/popper.js"></script>
<script src="public/assets/vendor/js/bootstrap.js"></script>
<script src="public/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="public/assets/vendor/libs/hammer/hammer.js"></script>
<script src="public/assets/vendor/libs/i18n/i18n.js"></script>
<script src="public/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="public/assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="public/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="public/assets/vendor/libs/swiper/swiper.js"></script>
{{--<script src="public/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>--}}

<!-- Main JS -->
<script src="public/assets/js/main.js"></script>
@yield('script')

{{--<!-- Page JS -->--}}
{{--<script src="public/assets/js/dashboards-analytics.js"></script>--}}
</body>
</html>
