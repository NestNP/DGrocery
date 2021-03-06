<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Daily Grocery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset ('assetsAdmin/images/logo-dark.png')}}" />

    <!-- plugin css -->
    <link
      href="{{asset ('assetsAdmin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Bootstrap Css -->
    <link
      href="{{asset ('assetsAdmin/css/bootstrap.min.css')}}"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />
    <!-- {{asset ('assetsAdmin/css/bootstrapmin.css')}} -->
    <!-- Icons Css -->
    <link href="{{asset ('assetsAdmin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link
      href="{{asset ('assetsAdmin/css/app.min.css')}}"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
    <!-- calender -->
    <link rel="stylesheet" href="{{asset('assetsAdmin/libs/@fullcalendar/core/main.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assetsAdmin/libs/@fullcalendar/daygrid/main.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assetsAdmin/libs/@fullcalendar/bootstrap/main.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assetsAdmin/libs/@fullcalendar/timegrid/main.min.css')}}" type="text/css">
    
    {{-- AddPost --}}
    <link
    href="{{asset('assetsAdmin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"
    rel="stylesheet"
    type="text/css"
  />
  <link
  href="{{asset('assetsAdmin/css/bootstrap.min.css')}}"
  id="bootstrap-style"
  rel="stylesheet"
  type="text/css"
/>
<link
    href="{{asset('assetsAdmin/libs/select2/css/select2.min.css')}}"
    rel="stylesheet"
    type="text/css"
    />
    <link
    href="{{asset('assetsAdmin/css/bootstrap.min.css')}}"
    id="bootstrap-style"
    rel="stylesheet"
    type="text/css"
  />
 
 <!-- Icons Css -->
 <link href="{{asset('assetsAdmin/css/icons.min.css" rel="stylesheet" type="text/css')}}" />
 <!-- App Css-->
 <link
   href="{{asset('assetsAdmin/css/app.min.css"')}}
   id="app-style"
   rel="stylesheet"
   type="text/css"
 />

    
    <style>
      main .ck.ck-content {
        padding-left: 20px;
        height: 300px;
      }
      

      .ck.ck-toolbar {
        border-radius: 8px 8px 0 0 !important;
      }
      .ck.ck-editor__editable_inline  {
        border-radius:  0 0 8px 8px !important;
      }
    </style>

  </head>
<body>
<header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="#" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="assetsAdmin/images/logo-dark.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                  <img src="../assetsAdmin/images/logo-dark.png" alt="" height="70" />
                </span>
              </a>

              <a href="#" class="logo logo-light">
                <span class="logo-sm">
                  <img src="assetsAdmin/images/logo-dark.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                  <img
                    class="rounded-circle"
                    src="assetsAdmin/images/logo-dark.png"
                    alt=""
                    height="60"
                  />
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-24 header-item waves-effect"
              id="vertical-menu-btn"
            >
              <i class="mdi mdi-menu"></i>
            </button>

            <div class="topbar-social-icon me-3 d-none d-md-block">
              <ul class="list-inline title-tooltip m-0">
                <li class="list-inline-item">
                  <a
                    href="email-inbox.html"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Email"
                  >
                    <i class="mdi mdi-email-outline"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a
                    href="chat.html"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Chat"
                  >
                    <i class="mdi mdi-tooltip-outline"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a
                    href="calendar.html"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Calendar"
                  >
                    <i class="mdi mdi-calendar"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a
                    href="pages-invoice.html"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Printer"
                  >
                    <i class="mdi mdi-printer"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Search input -->
          <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
              <input class="search-input form-control" placeholder="Search" />
              <a
                href="#"
                class="close-search toggle-search"
                data-target="#search-wrap"
              >
                <i class="mdi mdi-close-circle"></i>
              </a>
            </div>
          </div>

          <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block">
              <button
                type="button"
                class="btn header-item toggle-search noti-icon waves-effect"
                data-target="#search-wrap"
              >
                <i class="mdi mdi-magnify"></i>
              </button>
            </div>

           

            <div class="dropdown d-none d-lg-inline-block ms-1">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-toggle="fullscreen"
              >
                <i class="mdi mdi-fullscreen"></i>
              </button>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="mdi mdi-bell-outline bx-tada"></i>
                <span class="badge bg-danger rounded-pill">3</span>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown"
              >
                <div class="p-3">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0">Notifications</h6>
                    </div>
                    <div class="col-auto">
                      <a href="#!" class="small"> View All</a>
                    </div>
                  </div>
                </div>
                <div data-simplebar style="max-height: 230px">
                  <a href="" class="text-reset notification-item">
                    <div class="media">
                      <div class="avatar-xs me-3">
                        <span
                          class="avatar-title bg-primary rounded-circle font-size-16"
                        >
                          <i class="mdi mdi-cart text-white"></i>
                        </span>
                      </div>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">Your order is placed</h6>
                        <div class="font-size-13 text-muted">
                          <p class="mb-1">
                            If several languages coalesce the grammar
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 3 min ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                    <div class="media">
                      <img
                        src="assetsAdmin/images/users/avatar-3.jpg"
                        class="me-3 rounded-circle avatar-xs"
                        alt="user-pic"
                      />
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">Srijal Shrestha</h6>
                        <div class="font-size-13 text-muted">
                          <p class="mb-1">
                            It will seem like simplified English.
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 1 hours ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                    <div class="media">
                      <div class="avatar-xs me-3">
                        <span
                          class="avatar-title bg-success rounded-circle font-size-16"
                        >
                          <i class="mdi mdi-check text-white"></i>
                        </span>
                      </div>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">Your item is shipped</h6>
                        <div class="font-size-13 text-muted">
                          <p class="mb-1">
                            If several languages coalesce the grammar
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 3 min ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="" class="text-reset notification-item">
                    <div class="media">
                      <img
                        src="assetsAdmin/images/users/avatar-4.jpg"
                        class="me-3 rounded-circle avatar-xs"
                        alt="user-pic"
                      />
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">Salena Layfield</h6>
                        <div class="font-size-13 text-muted">
                          <p class="mb-1">
                            As a skeptical Cambridge friend of mine occidental.
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 1 hours ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="p-2 border-top">
                  <a
                    class="btn btn-sm btn-link font-size-14 w-100 text-center"
                    href="javascript:void(0)"
                  >
                    <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                  </a>
                </div>
              </div>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item waves-effect"
                id="page-header-user-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="rounded-circle header-profile-user"
                  src="assetsAdmin/images/users/avatar-7.jpg"
                  alt="Header Avatar"
                />
                <span class="d-none d-xl-inline-block ms-1">Saman</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"
                  ><i
                    class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"
                  ></i>
                  Profile</a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    class="mdi mdi-wallet-outline font-size-16 align-middle me-1"
                  ></i>
                  My Wallet</a
                >
                <a class="dropdown-item d-block" href="#"
                  ><span class="badge badge-success float-end">11</span
                  ><i
                    class="mdi mdi-cog-outline font-size-16 align-middle me-1"
                  ></i>
                  Settings</a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    class="mdi mdi-lock-open-outline font-size-16 align-middle me-1"
                  ></i>
                  Lock screen</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="#"
                  ><i
                    class="mdi mdi-power font-size-16 align-middle me-1 text-danger"
                  ></i>
                  Logout</a
                >
              </div>
            </div>

           
          </div>
        </div>
            <script src="{{asset ('./libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset ('./libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('./libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset ('./libs/simplebar/simplebar.min.js')}}"></script>
    <script src="./libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="{{asset ('./libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset ('./libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset ('./libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

    <script src="{{asset ('./js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset ('./js/app.js')}}"></script>
      </header>