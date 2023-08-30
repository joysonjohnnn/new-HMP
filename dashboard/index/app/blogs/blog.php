<!DOCTYPE html>

<html lang="en" class="light-style  layout-menu-fixed   " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>HMP Users List</title>


  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../../logo.png" />





  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../assets/assets/vendor/fonts/boxicons.css?id=87122b3a3900320673311cebdeb618da" />
  <link rel="stylesheet" href="../../assets/assets/vendor/fonts/fontawesome.css?id=89157e39c524ff7f679d3aebf872b7b9" />
  <link rel="stylesheet" href="../../assets/assets/vendor/fonts/flag-icons.css?id=403b97c176f3cdf56a3cbf09107ee240" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/assets/vendor/css/rtl/core.css?id=30f6a84d4dc0a86dc216aa680dd667cd" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/assets/vendor/css/rtl/theme-default.css?id=2f917d58c88e2f7f1b632fe86d6b21e6" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/assets/css/demo.css?id=24b55ca26d6f2bafc5a21ff5a4bcdfb3" />


  <link rel="stylesheet" href="../../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=d9fa6469688548dca3b7e6bd32cb0dc6" />
  <link rel="stylesheet" href="../../assets/assets/vendor/libs/typeahead-js/typeahead.css?id=8fc311b79b2aeabf94b343b6337656cf" />

  <!-- Vendor Styles -->
  <link rel="stylesheet" href="../../assets/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
  <link rel="stylesheet" href="../../assets/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
  <link rel="stylesheet" href="../../assets/assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />



  <!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- laravel style -->
  <script src="../../assets/assets/vendor/js/helpers.js"></script>
  <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/assets/js/config.js"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
      displayCustomizer: true,
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': '../../assets/assets/vendor/css/rtl/core.css?id=30f6a84d4dc0a86dc216aa680dd667cd',
            'core-dark.css': '../../assets/assets/vendor/css/rtl/core-dark.css?id=219e84e3d1fac8566672731c35d62d6e',
          
          // Themes
                      'theme-default.css': '../../assets/assets/vendor/css/rtl/theme-default.css?id=2f917d58c88e2f7f1b632fe86d6b21e6',
            'theme-default-dark.css':
            '../../assets/assets/vendor/css/rtl/theme-default-dark.css?id=4a7fa3486f98ff5ea4cc844dea4b56b7',
                      'theme-bordered.css': '../../assets/assets/vendor/css/rtl/theme-bordered.css?id=bca67194f9d192b8e7d7e8b139dfcae2',
            'theme-bordered-dark.css':
            '../../assets/assets/vendor/css/rtl/theme-bordered-dark.css?id=e4ff4792d65f77e1d21e221534d35fe1',
                      'theme-semi-dark.css': '../../assets/assets/vendor/css/rtl/theme-semi-dark.css?id=62342f847731afa78c9595579da0e81d',
            'theme-semi-dark-dark.css':
            '../../assets/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=d9b8b306e76164f732f816809db5e358',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","layoutType","showDropdownOnHover","layoutNavbarFixed","layoutFooterFixed","themes"],
    });
  </script>
  <!-- beautify ignore:end -->

</head>

<body>



  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
    <div class="layout-container">

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

        <!-- ! Hide app brand if navbar-full -->
        <div class="app-brand demo" style="justify-content: center;height: 135px;">
          <a class="app-brand-link">
            <!-- <span class="app-brand-logo demo"> -->
            <img src="../../../logo.png" alt="Brand Logo" style="min-width: 200px;max-width: 200px;">
            <!-- </span> -->
            <!-- <span class="app-brand-text demo menu-text fw-bold ms-2" style="text-transform: capitalize;">HMP</span> -->
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <!-- <div class="menu-inner-shadow"></div> -->

        <ul class="menu-inner py-1">








          <li class="menu-item">
            <a href="../../index/index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div>Dashboard</div>
            </a>

          </li>








          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div>Users</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="../user/list.php" class="menu-link">
                  <div>View</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <div>More</div>
                </a>


                <ul class="menu-sub">



                  <li class="menu-item ">
                    <a href="../assets-1/app/user/view/account" class="menu-link">
                      <div>Add Account</div>
                    </a>


                  </li>




                  <li class="menu-item ">
                    <a href="../assets-1/app/user/view/account.html" class="menu-link">
                      <div>Health Partners</div>
                    </a>


                  </li>



                  <li class="menu-item ">
                    <a href="../assets-1/app/user/view/notifications" class="menu-link">
                      <div>Notifications</div>
                    </a>


                  </li>




                </ul>
              </li>
            </ul>
          </li>








          <li class="menu-item active">
            <a href="blog.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div>Blogs</div>
            </a>



          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Program Management</span>
          </li>


          <li class="menu-item ">
            <a href="../assets-1/app/calendar" class="menu-link">
              <i class="menu-icon tf-icons bx bx-calendar"></i>
              <div>My Calendar</div>
            </a>


          </li>






          <li class="menu-item ">
            <a href="../assets-1/app/email" class="menu-link">
              <i class="menu-icon tf-icons bx bx-box"></i>
              <div>HMP Programs</div>
            </a>


          </li>








          <li class="menu-item ">
            <a href="../assets-1/app/chat" class="menu-link">
              <i class="menu-icon tf-icons bx bx-window-open"></i>
              <div>User Program</div>
            </a>


          </li>

















          <li class="menu-item ">
            <a href="../assets-1/app/kanban" class="menu-link">
              <i class="menu-icon tf-icons bx bx-grid"></i>
              <div>Excercise Library</div>
            </a>


          </li>




          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Administration</span>
          </li>



          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-food-menu"></i>
              <div>Invoice</div>
            </a>


            <ul class="menu-sub">



              <li class="menu-item ">
                <a href="../assets-1/app/invoice/list" class="menu-link">
                  <div>List</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="../assets-1/app/invoice/preview" class="menu-link">
                  <div>Preview</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="../assets-1/app/invoice/edit" class="menu-link">
                  <div>Edit</div>
                </a>


              </li>



              <li class="menu-item ">
                <a href="../assets-1/app/invoice/add" class="menu-link">
                  <div>Add</div>
                </a>


              </li>
            </ul>
          </li>







          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Misc</span>
          </li>









          <li class="menu-item ">
            <a href="" class="menu-link" target="_blank">
              <i class="menu-icon tf-icons bx bx-support"></i>
              <div>Support</div>
            </a>


          </li>








          <li class="menu-item ">
            <a href="" class="menu-link" target="_blank">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div>Documentation</div>
            </a>


          </li>
        </ul>

      </aside>


      <!-- Layout page -->
      <div class="layout-page">




        <!-- BEGIN: Navbar-->
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <!--  Brand demo (display only for navbar-full and hide on below xl) -->

          <!-- ! Not required for layout-without-menu -->
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                  <i class="bx bx-layout"></i>
                  <span class="d-none d-md-inline-block text-bold">Blog List</span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">



              <!-- Style Switcher -->
              <li class="nav-item me-2 me-xl-0">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                  <i class='bx bx-sm'></i>
                </a>
              </li>
              <!--/ Style Switcher -->

              <!-- Quick links  -->
              <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <i class='bx bx-grid-alt bx-sm'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                  <div class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                      <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                    </div>
                  </div>
                  <div class="dropdown-shortcuts-list scrollable-container">
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-calendar fs-4"></i>
                        </span>
                        <a href="app/calendar" class="stretched-link">Calendar</a>
                        <small class="text-muted mb-0">Appointments</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-food-menu fs-4"></i>
                        </span>
                        <a href="app/invoice/list" class="stretched-link">Invoice App</a>
                        <small class="text-muted mb-0">Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-user fs-4"></i>
                        </span>
                        <a href="app/user/list" class="stretched-link">User App</a>
                        <small class="text-muted mb-0">Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-check-shield fs-4"></i>
                        </span>
                        <a href="app/access-roles" class="stretched-link">Role Management</a>
                        <small class="text-muted mb-0">Permission</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                        </span>
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                        <small class="text-muted mb-0">User Profile</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-cog fs-4"></i>
                        </span>
                        <a href="pages/account-settings-account" class="stretched-link">Setting</a>
                        <small class="text-muted mb-0">Account Settings</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-help-circle fs-4"></i>
                        </span>
                        <a href="pages/help-center-landing" class="stretched-link">Help Center</a>
                        <small class="text-muted mb-0">FAQs & Articles</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-window-open fs-4"></i>
                        </span>
                        <a href="modal-examples" class="stretched-link">Modals</a>
                        <small class="text-muted mb-0">Useful Popups</small>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->

              <!-- Notification -->
              <!-- <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="bx bx-bell bx-sm"></i>
              <span class="badge bg-danger rounded-pill badge-notifications">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Notification</h5>
                  <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../assets/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                        <p class="mb-0">Won the monthly best seller gold badge</p>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Charles Franklin</h6>
                        <p class="mb-0">Accepted your connection</p>
                        <small class="text-muted">12hr ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../assets/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New Message ✉️</h6>
                        <p class="mb-0">You have new message from Natalie</p>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                        <p class="mb-0">ACME Inc. made new order $1,154</p>
                        <small class="text-muted">1 day ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../assets/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Application has been approved 🚀 </h6>
                        <p class="mb-0">Your ABC project application has been approved.</p>
                        <small class="text-muted">2 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Monthly report is generated</h6>
                        <p class="mb-0">July monthly financial report is generated </p>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../assets/assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Send connection request</h6>
                        <p class="mb-0">Peter sent you connection request</p>
                        <small class="text-muted">4 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="../../assets/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New message from Jane</h6>
                        <p class="mb-0">Your have new message from Jane</p>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">CPU is running high</h6>
                        <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown-menu-footer border-top">
                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40">
                  View all notifications
                </a>
              </li>
            </ul>
          </li> -->
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../assets/assets/img/avatars/empty.jpg" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../../assets/assets/img/avatars/empty.jpg" alt class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">
                            John Doe
                          </span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages/profile-user">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="app/invoice/list">
                      <i class="bx bx-credit-card me-2"></i>
                      <span class="align-middle">Billing</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth/login-basic">
                      <i class='bx bx-log-in me-2'></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>



        </nav>
        <!-- / Navbar -->
        <!-- END: Navbar-->


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row g-4 mb-4">
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Total Blogs</span>
                        <div class="d-flex align-items-end mt-2">
                          <h4 class="mb-0 me-2">21,459</h4>
                        </div>
                        <small>Library</small>
                      </div>
                      <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-book bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Pending Blogs</span>
                        <div class="d-flex align-items-end mt-2">
                          <h4 class="mb-0 me-2">4,567</h4>
                        </div>
                        <small>Not Posted</small>
                      </div>
                      <span class="badge bg-label-danger rounded p-2">
                        <i class="bx bx-book-bookmark bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>Active Blogs</span>
                        <div class="d-flex align-items-end mt-2">
                          <h4 class="mb-0 me-2">9,860</h4>
                        </div>
                        <small>Posted</small>
                      </div>
                      <span class="badge bg-label-success rounded p-2">
                        <i class="bx bx-group bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="content-left">
                        <span>User Engaement</span>
                        <div class="d-flex align-items-end mt-2">
                          <h4 class="mb-0 me-2">237</h4>
                          <small class="text-success">(+100%)</small>
                        </div>
                        <small>Total Views</small>
                      </div>
                      <span class="badge bg-label-warning rounded p-2">
                        <i class="bx bx-user-voice bx-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Users List Table -->
            <div class="card">
              <div class="card-header ">
                <h5 class="card-title">Blog Table</h5>
                <!-- <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                  <div class="col-md-4 user_role"></div>
                  <div class="col-md-4 user_plan"></div>
                  <div class="col-md-4 user_status"></div>
                </div> -->
              </div>
              <div class="card-datatable table-responsive mb-5">
                <table id="example" class="datatables-users table border-top">
                  <thead>
                    <tr>
                      <th style="display: none;">sr</th>
                      <th>Title</th>
                      <th>Tag</th>
                      <th>Author</th>
                      <th>Timestamp</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td class="control" tabindex="0" style="display: none;"></td>
                      <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                          <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><span class="avatar-initial rounded-circle bg-label-primary">VK</span></div>
                          </div>
                          <div class="d-flex flex-column"><a href="../app/user/view/account" class="text-body text-truncate"><span class="fw-semibold">Jaison John</span></a><small class="text-muted">zmcclevertye@soundcloud.com</small></div>
                        </div>
                      </td>
                      <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"><i class="bx bx-pie-chart-alt bx-xs"></i></span>Maintainer</span></td>
                      <td><span class="fw-semibold">User</span></td>
                      <td>8693018544</td>
                      <td><span class="badge bg-label-success">Active</span></td>
                      <td>
                        <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu dropdown-menu-end m-0"><a href="../app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div>
                        </div>
                      </td>
                    </tr>
                    <tr class="even">
                      <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                      <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                          <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><span class="avatar-initial rounded-circle bg-label-primary">VK</span></div>
                          </div>
                          <div class="d-flex flex-column"><a href="../app/user/view/account" class="text-body text-truncate"><span class="fw-semibold">Admin</span></a><small class="text-muted">Heathmatthews@gmail.com</small></div>
                        </div>
                      </td>
                      <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="bx bx-cog bx-xs"></i></span>Admin</span></td>
                      <td><span class="fw-semibold">Team</span></td>
                      <td>8693018544</td>
                      <td><span class="badge bg-label-grey">Inactive</span></td>
                      <td>
                        <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu dropdown-menu-end m-0"><a href="../app/user/view/account" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            
              
            </div>

            <!-- pricingModal -->
            <!--/ pricingModal -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
          <!-- Footer-->
          <footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
        document.write(new Date().getFullYear())

      </script>
      , made with ❤️ by <a href="#" target="_blank" class="footer-link fw-bolder">HMP</a>
    </div>
    <div>
      <a href="" class="footer-link me-4" target="_blank">Terms & Conditions</a>
      <a href="" target="_blank" class="footer-link me-4">Documentation</a>
      <a href="support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
    </div>
  </div>
</footer>
          <!--/ Footer-->
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
  <!--/ Layout Content -->




  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
  <script src="../../assets/assets/vendor/libs/jquery/jquery.js?id=28f58d9b27389bc2161474b63d4550fb"></script>
  <script src="../../assets/assets/vendor/libs/popper/popper.js?id=b97e30d0826b14784a53312b6ea562bc"></script>
  <script src="../../assets/assets/vendor/js/bootstrap.js?id=5cf23b844ba766fd18bf77de6f71daee"></script>
  <script src="../../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=44b8e955848dc0c56597c09f6aebf89a"></script>
  <script src="../../assets/assets/vendor/libs/hammer/hammer.js?id=f2b232153f92e544aab0ed45c56ab524"></script>
  <script src="../../assets/assets/vendor/libs/typeahead-js/typeahead.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
  <script src="../../assets/assets/vendor/js/menu.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
  <script src="../../assets/assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="../../assets/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="../../assets/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <script src="../../assets/assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="../../assets/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Theme JS-->
  <script src="../../assets/assets/js/main.js?id=c7461a0f5b05fcaf0ec16762760d3ea5"></script>

  <!-- END: Theme JS-->
  <!-- Pricing Modal JS-->
  <!-- END: Pricing Modal JS-->
  <!-- BEGIN: Page JS-->
  <!-- <script src="../../assets/assets/js/app-user-list.js"></script> -->
  <!-- END: Page JS-->
    <script>
      $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'csv', 'excel',{
                extend: 'pdfHtml5',
                download: 'open',
                
          
            } ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
    </script>
</body>

</html>