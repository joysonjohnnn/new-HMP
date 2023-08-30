<!DOCTYPE html>

<html lang="en" class="light-style  layout-menu-fixed  " dir="ltr" data-theme="theme-default" >

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>HMP Dashboard</title>
  <meta name="description" content="Towards Wellness" />
  <meta name="keywords" content="">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://heathmatthewsphysio.in/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../logo.png" />

  
    
    

  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../assets/assets/vendor/fonts/boxicons.css?id=87122b3a3900320673311cebdeb618da" />
<link rel="stylesheet" href="../assets/assets/vendor/fonts/fontawesome.css?id=89157e39c524ff7f679d3aebf872b7b9" />
<link rel="stylesheet" href="../assets/assets/vendor/fonts/flag-icons.css?id=403b97c176f3cdf56a3cbf09107ee240" />

<!-- Core CSS -->
<link rel="stylesheet" href="../assets/assets/vendor/css/rtl/core.css?id=30f6a84d4dc0a86dc216aa680dd667cd" class="template-customizer-core-css" />
<link rel="stylesheet" href="../assets/assets/vendor/css/rtl/theme-default.css?id=2f917d58c88e2f7f1b632fe86d6b21e6" class="template-customizer-theme-css" />
<link rel="stylesheet" href="../assets/assets/css/demo.css?id=24b55ca26d6f2bafc5a21ff5a4bcdfb3" />


<link rel="stylesheet" href="../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=d9fa6469688548dca3b7e6bd32cb0dc6" />
<link rel="stylesheet" href="../assets/assets/vendor/libs/typeahead-js/typeahead.css?id=8fc311b79b2aeabf94b343b6337656cf" />

<!-- Vendor Styles -->
<link rel="stylesheet" href="../assets/assets/vendor/libs/apex-charts/apex-charts.css">


<!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- laravel style -->
<script src="../assets/assets/vendor/js/helpers.js"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../assets/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/assets/js/config.js"></script>

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
                      'core.css': '../assets/assets/vendor/css/rtl/core.css',
            'core-dark.css': '../assets/assets/vendor/css/rtl/core-dark.css',
          
          // Themes
                      'theme-default.css': '../assets/assets/vendor/css/rtl/theme-default.css',
            'theme-default-dark.css':
            '../assets/assets/vendor/css/rtl/theme-default-dark.css',
                      'theme-bordered.css': '../assets/assets/vendor/css/rtl/theme-bordered.css',
            'theme-bordered-dark.css':
            '../assets/assets/vendor/css/rtl/theme-bordered-dark.css',
                      'theme-semi-dark.css': '../assets/assets/vendor/css/rtl/theme-semi-dark.css',
            'theme-semi-dark-dark.css':
            '../assets/assets/vendor/css/rtl/theme-semi-dark-dark.css',
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
        <img src="../../logo.png" alt="Brand Logo" style="min-width: 200px;max-width: 200px;">
      <!-- </span> -->
      <!-- <span class="app-brand-text demo menu-text fw-bold ms-2" style="text-transform: capitalize;">HMP</span> -->
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  
  <!-- <div class="menu-inner-shadow"></div> -->

  <ul class="menu-inner py-1">
    
    

    
    
    
    
    
    <li class="menu-item active open">
      <a href="javascript:void(0);" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
      </a>

          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div>Users</div>
        </a>
  
        
              <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="../app/user/list.php" class="menu-link" >
                      <div>View</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle" >
                      <div>More</div>
          </a>
  
          
                    <ul class="menu-sub">
        
      
      
        <li class="menu-item ">
          <a href="../assets-1/app/user/view/account" class="menu-link" >
                      <div>Add Account</div>
          </a>
  
          
                </li>
      
      
      
      
        <li class="menu-item ">
          <a href="../assets-1/app/user/view/account.html" class="menu-link" >
                      <div>Health Partners</div>
          </a>
  
          
                </li>
      
      
      
        <li class="menu-item ">
          <a href="../assets-1/app/user/view/notifications" class="menu-link" >
                      <div>Notifications</div>
          </a>
  
          
                </li>
      
      
      
        
        </ul>
                </li>
        </ul>
            </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="../app/blogs/blog.php" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Blogs</div>
      </a>

      
            
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Program Management</span>
    </li>

        
    <li class="menu-item ">
        <a href="../assets-1/app/calendar" class="menu-link" >
                  <i class="menu-icon tf-icons bx bx-calendar"></i>
                  <div>My Calendar</div>
        </a>
  
        
    </li>

    
    
    
    
    
    <li class="menu-item ">
      <a href="../assets-1/app/email" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div>HMP Programs</div>
      </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="../assets-1/app/chat" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-window-open"></i>
                <div>User Program</div>
      </a>

      
          </li>
        
    

    
    
    
    
    

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="../assets-1/app/kanban" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div>Excercise Library</div>
      </a>

      
          </li>
        
    

    
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Administration</span>
          </li>
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div>Invoice</div>
      </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../assets-1/app/invoice/list" class="menu-link" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../assets-1/app/invoice/preview" class="menu-link" >
                    <div>Preview</div>
        </a>

        
        </li>
    
    
    
      <li class="menu-item ">
        <a href="../assets-1/app/invoice/edit" class="menu-link" >
                    <div>Edit</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../assets-1/app/invoice/add" class="menu-link" >
                    <div>Add</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div>Support</div>
      </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="" class="menu-link"  target="_blank" >
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
              <i class="bx bx-home-alt bx-sm"></i>
              <span class="d-none d-md-inline-block text-bold text-large padding-left-5">Dashboard</span>
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
                    <a href="../app/calendar" class="stretched-link">Calendar</a>
                    <small class="text-muted mb-0">Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-food-menu fs-4"></i>
                    </span>
                    <a href="../app/invoice/list" class="stretched-link">Invoice App</a>
                    <small class="text-muted mb-0">Manage Accounts</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-user fs-4"></i>
                    </span>
                    <a href="../app/user/list" class="stretched-link">User App</a>
                    <small class="text-muted mb-0">Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-check-shield fs-4"></i>
                    </span>
                    <a href="../app/access-roles" class="stretched-link">Role Management</a>
                    <small class="text-muted mb-0">Permission</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                    </span>
                    <a href="." class="stretched-link">Dashboard</a>
                    <small class="text-muted mb-0">User Profile</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-cog fs-4"></i>
                    </span>
                    <a href="./pages/account-settings-account" class="stretched-link">Setting</a>
                    <small class="text-muted mb-0">Account Settings</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-help-circle fs-4"></i>
                    </span>
                    <a href="./pages/help-center-landing" class="stretched-link">Help Center</a>
                    <small class="text-muted mb-0">FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                      <i class="bx bx-window-open fs-4"></i>
                    </span>
                    <a href="./modal-examples" class="stretched-link">Modals</a>
                    <small class="text-muted mb-0">Useful Popups</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
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
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New Message ✉️</h6>
                        <p class="mb-0">Are you Facing any injuries Jaison ?</p>
                        <small class="text-muted">HP - Jeff </small>
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
                          <span class="avatar-initial rounded-circle bg-label-danger">ACL</span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">ACL Knee Rehab</h6>
                        <p class="mb-0">You Just Started Knee Rehab Program</p>
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
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
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
                        <p class="mb-0">You Just Renewed your subscription for Rs 499</p>
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
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Monthly report is generated</h6>
                        <p class="mb-0">July month Invoice report is generated and forwarded to your mail </p>
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
                          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Program has been approved 🚀 </h6>
                        <p class="mb-0">Your ABC project application has been approved.</p>
                        <small class="text-muted">2 days ago</small>
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
          </li>
          <!--/ Notification -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="../assets/assets/img/avatars/empty.jpg" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="./pages/profile-user">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="../assets/assets/img/avatars/empty.jpg" alt class="w-px-40 h-auto rounded-circle">
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
                <a class="dropdown-item" href="./pages/profile-user">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
                            <li>
                <a class="dropdown-item" href="../app/invoice/list">
                  <i class="bx bx-credit-card me-2"></i>
                  <span class="align-middle">Billing</span>
                </a>
              </li>
                            <li>
                <div class="dropdown-divider"></div>
              </li>
                            <li>
                <a class="dropdown-item" href="../auth/login-basic">
                  <i class='bx bx-log-in me-2'></i>
                  <span class="align-middle">Login</span>
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
            
            <div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Welcome Heath! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check User and sales table for updates.</p>


            <a href="javascript:;" class="btn btn-sm btn-label-primary">View Invoices</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="../assets/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" >
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="../assets/assets/img/icons/unicons/surface.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                </div>
              </div>
            </div>
            <span>Engagement</span>
            <h3 class="card-title text-nowrap mb-1">79%</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="../assets/assets/img/icons/unicons/cc-success.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">29</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
          <div id="totalRevenueChart" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2023
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">2023</a>
                  <a class="dropdown-item" href="javascript:void(0);">2022</a>
                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-semibold pt-3 mb-2">78% Company Growth</div>

          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2022</small>
                <h6 class="mb-0">₹32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2023</small>
                <h6 class="mb-0">₹41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue -->
  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="assets/assets/img/icons/unicons/chart.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">users</span>
            <h3 class="card-title text-nowrap mb-2">2,456</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +14.82%</small>
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/assets/img/icons/unicons/wallet-round.png" alt="Credit Card" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="d-block mb-1">Loss</span>
              <h3 class="card-title text-nowrap mb-2">2,499</h3>
              <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> +14.82%</small>
            </div>
          </div>
      </div>
      <!-- </div>
    <div class="row"> -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Total Revenue</h5>
                  <span class="badge bg-label-warning rounded-pill">Year 2023</span>
                </div>
                <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-semibold"><i class='bx bx-chevron-up'></i> 68.2%</small>
                  <h3 class="mb-0">₹1,84,686</h3>
                </div>
              </div>
              <div id=""><img src="assets/assets/img/icons/unicons/chart1.png" draggable="false"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Order Statistics -->
  <div class="col-12 col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-6">
          <div class="card-header d-flex align-items-center justify-content-between mb-4">
            <h5 class="card-title m-0 me-2">Most Liked <span class="text-primary">Blogs</span></h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="topSales" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topSales">
                <a class="dropdown-item" href="javascript:void(0);">View All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../.../assets/images/logos/stock/physiotherapy.png" alt="Physiotherapy" class="rounded">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Physiotherapy</h6>
                        <small class="text-muted d-block mb-1">3 Topics</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <span class="fw-semibold">100</span>
                        <span class="badge bg-label-success">+16.7%</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../.../assets/images/logos/stock/rehabilitation.png" alt="" class="rounded">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Rehabilitation</h6>
                        <small class="text-muted d-block mb-1">0 Topics</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <span class="fw-semibold">0</span>
                        <span class="badge bg-label-danger">0.00%</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../.../assets/images/logos/stock/strength.png" alt="" class="rounded">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Strength & Con..</h6>
                        <small class="text-muted d-block mb-1">10 Topics</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <span class="fw-semibold">66</span>
                        <span class="badge bg-label-success">+16.7%</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../.../assets/images/logos/stock/massage.png" alt="" class="rounded">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Tissue Massage</h6>
                        <small class="text-muted d-block mb-1">2 Topics</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <span class="fw-semibold">31</span>
                        <span class="badge bg-label-success">+16.7%</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../.../assets/images/logos/stock/nutrition.png" alt="Oneplus RT" class="rounded">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Nutrition</h6>
                        <small class="text-muted d-block mb-1">2 Topics</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <span class="fw-semibold">12,3k.71</span>
                        <span class="badge bg-label-success">+16.7%</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../.../assets/images/logos/stock/therapy.png" alt="Oneplus RT" class="rounded">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Therapy</h6>
                        <small class="text-muted d-block mb-1">2 Topics</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <span class="fw-semibold">12,3k.71</span>
                        <span class="badge bg-label-success">+16.7%</span>
                      </div>
                    </div>
                  </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <!-- <div class="card-header d-flex align-items-center justify-content-between mb-4">
            
          </div> -->
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex my-4 py-3">
                
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="../.../assets/images/logos/stock/acupuncture.png" alt="" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Acupuncture</h6>
                    <small class="text-muted d-block mb-1">2 Topics</small>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-3">
                    <span class="fw-semibold">74.9k</span>
                    <span class="badge bg-label-success">-8.5%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="../.../assets/images/logos/stock/yoga.png" alt="" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Yoga</h6>
                    <small class="text-muted d-block mb-1">2 Topics</small>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-3">
                    <span class="fw-semibold">4.4k</span>
                    <span class="badge bg-label-success">+62.6%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="../.../assets/images/logos/stock/hypno.png" alt="" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">HypnoBirthing</h6>
                    <small class="text-muted d-block mb-1">2 Topics</small>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-3">
                    <span class="fw-semibold">12,3k</span>
                    <span class="badge bg-label-success">+16.7%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="../.../assets/images/logos/stock/sound.jpg" alt="" class="rounded">
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Sound Therapy</h6>
                    <small class="text-muted d-block mb-1">2 Topics</small>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-3">
                    <span class="fw-semibold">0</span>
                    <span class="badge bg-label-danger">0.00%</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Transactions -->

   <!-- Expense Overview -->
   <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Total Revenue</button>
          </li>
          
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="assets/assets/img/icons/unicons/wallet.png" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Income</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">₹459.00</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Better Than Week</p>
                <small class="text-muted">₹39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->


  
  <!--/ Activity Timeline -->
  <!-- pill table -->
  <div class="col-md-12 order-3 order-lg-6 mb-5 mb-lg-5">
    <div class="card text-center">
      <div class="card-header py-3">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser" aria-selected="true">Browser</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false">Operating System</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-country" aria-controls="navs-pills-country" aria-selected="false">Country</button>
          </li>
        </ul>
      </div>
      <div class="tab-content pt-0">
        <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
          <div class="table-responsive text-start">
            <table class="table table-borderless text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Browser</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/chrome.png" alt="Chrome" height="24" class="me-2">
                      <span>Chrome</span>
                    </div>
                  </td>
                  <td>8.92k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 84.75%" aria-valuenow="84.75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">84.75%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/safari.png" alt="Safari" height="24" class="me-2">
                      <span>Safari</span>
                    </div>
                  </td>
                  <td>7.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72.43%" aria-valuenow="72.43" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">72.43%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/firefox.png" alt="Firefox" height="24" class="me-2">
                      <span>Firefox</span>
                    </div>
                  </td>
                  <td>6.11k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67.37%" aria-valuenow="67.37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">67.37%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/edge.png" alt="Edge" height="24" class="me-2">
                      <span>Edge</span>
                    </div>
                  </td>
                  <td>5.08k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60.12%" aria-valuenow="60.12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">60.12%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/opera.png" alt="Opera" height="24" class="me-2">
                      <span>Opera</span>
                    </div>
                  </td>
                  <td>3.93k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 51.94%" aria-valuenow="51.94" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">51.94%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/brave.png" alt="Brave" height="24" class="me-2">
                      <span>Brave</span>
                    </div>
                  </td>
                  <td>3.19k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">39.94%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/vivaldi.png" alt="Vivaldi" height="24" class="me-2">
                      <span>Vivaldi</span>
                    </div>
                  </td>
                  <td>1.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 28.43%" aria-valuenow="28.43" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">18.43%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/uc.png" alt="UC Browser" height="24" class="me-2">
                      <span>UC Browser</span>
                    </div>
                  </td>
                  <td>328</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20.14%" aria-valuenow="20.14" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">20.14%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
          <div class="table-responsive text-start">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>System</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/windows.png" alt="Windows" height="24" class="me-2">
                      <span>Windows</span>
                    </div>
                  </td>
                  <td>875.24k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 71.50%" aria-valuenow="71.50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">71.50%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/mac.png" alt="Mac" height="24" class="me-2">
                      <span>Mac</span>
                    </div>
                  </td>
                  <td>89.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66.67%" aria-valuenow="66.67" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">66.67%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/ubuntu.png" alt="Ubuntu" height="24" class="me-2">
                      <span>Ubuntu</span>
                    </div>
                  </td>
                  <td>37.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 62.82%" aria-valuenow="62.82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">62.82%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/chrome.png" alt="Chrome" height="24" class="me-2">
                      <span>Chrome</span>
                    </div>
                  </td>
                  <td>35.34k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 56.25%" aria-valuenow="56.25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">56.25%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/cent.png" alt="Cent" height="24" class="me-2">
                      <span>Cent</span>
                    </div>
                  </td>
                  <td>32.25k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 42.76%" aria-valuenow="42.76" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">42.76%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/linux.png" alt="Linux" height="24" class="me-2">
                      <span>Linux</span>
                    </div>
                  </td>
                  <td>22.15k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 37.77%" aria-valuenow="37.77" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">37.77%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/fedora.png" alt="Fedora" height="24" class="me-2">
                      <span>Fedora</span>
                    </div>
                  </td>
                  <td>1.13k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 29.16%" aria-valuenow="29.16" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">29.16%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/vivaldi-os.png" alt="Vivaldi" height="24" class="me-2">
                      <span>Vivaldi</span>
                    </div>
                  </td>
                  <td>1.09k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 26.26%" aria-valuenow="26.26" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">26.26%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
          <div class="table-responsive text-start">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Country</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/us.svg" alt="USA" height="24" class="me-2">
                      <span>USA</span>
                    </div>
                  </td>
                  <td>87.24k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 89.12%" aria-valuenow="89.12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">89.12%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/br.svg" alt="Brazil" height="24" class="me-2">
                      <span>Brazil</span>
                    </div>
                  </td>
                  <td>62.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78.23%" aria-valuenow="78.23" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">78.23%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/in.svg" alt="India" height="24" class="me-2">
                      <span>India</span>
                    </div>
                  </td>
                  <td>52.58k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 69.82%" aria-valuenow="69.82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">69.82%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/au.svg" alt="Australia" height="24" class="me-2">
                      <span>Australia</span>
                    </div>
                  </td>
                  <td>44.13k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 59.90%" aria-valuenow="59.90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">59.90%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/de.svg" alt="Germany" height="24" class="me-2">
                      <span>Germany</span>
                    </div>
                  </td>
                  <td>32.21k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57.11%" aria-valuenow="57.11" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">57.11%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/fr.svg" alt="France" height="24" class="me-2">
                      <span>France</span>
                    </div>
                  </td>
                  <td>37.87k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 41.23%" aria-valuenow="41.23" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">41.23%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/pt.svg" alt="Portugal" height="24" class="me-2">
                      <span>Portugal</span>
                    </div>
                  </td>
                  <td>20.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 37.11%" aria-valuenow="37.11" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">37.11%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/cn.svg" alt="China" height="24" class="me-2">
                      <span>China</span>
                    </div>
                  </td>
                  <td>12.21k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 17.61%" aria-valuenow="17.61" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-semibold">17.61%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ pill table -->
</>

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


    <!-- floating btn  -->
  <!-- <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
  

  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
<script src="../assets/assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/assets/vendor/js/bootstrap.js"></script>
<script src="../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/assets/vendor/libs/hammer/hammer.js"></script>
<script src="../assets/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../assets/assets/vendor/js/menu.js"></script>
<script src="../assets/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="../assets/assets/js/main.js"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="../assets/assets/js/dashboards-analytics.js"></script>
<!-- END: Page JS-->

</body>

</html>
