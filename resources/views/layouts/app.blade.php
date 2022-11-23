<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/js/plugins/simplemde/simplemde.min.css') }}">
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-narrow">
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                c<span class="text-primary">b</span>
              </span>
              <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
                </span>
              </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-fw fa-times"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">
              <!-- Visible only in mini mode -->
              <div class="smini-visible-block animated fadeIn px-3">
                <img class="img-avatar img-avatar32" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="smini-hidden text-center mx-auto">
                <a class="img-link" href="#">
                  <img class="img-avatar" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
                </a>
                <ul class="list-inline mt-3 mb-0">
                  <li class="list-inline-item">
                    <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="#">
                        {{ Auth::user()->name }}
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-fx text-dual" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                      
                    </a>
                  </li>
                </ul>
              </div>
              <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                @if(Auth::user()->role_id == 1)
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('admin') }}">
                      <i class="nav-main-link-icon fa fa-house-user"></i>
                      <span class="nav-main-link-name">Dashboard</span>
                    </a>
                  </li>
                @else
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('donatur.index') }}">
                      <i class="nav-main-link-icon fa fa-house-user"></i>
                      <span class="nav-main-link-name">Dashboard</span>
                    </a>
                  </li>
                @endif
                
                
                @if(Auth::user()->role_id == 1)
                  <li class="nav-main-heading">Donatur</li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('pengguna.index') }}">
                      <i class="nav-main-link-icon fa fa-user-tie"></i>
                      <span class="nav-main-link-name">Donatur</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('pengguna.index') }}">
                      <i class="nav-main-link-icon fa fa-add"></i>
                      <span class="nav-main-link-name">Tambah Donatur</span>
                    </a>
                  </li>

                  <li class="nav-main-heading">Anak Yatim</li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('penerimadonasi.index') }}">
                      <i class="nav-main-link-icon fa fa-children"></i>
                      <span class="nav-main-link-name">Anak Yatim</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('penerimadonasi.create') }}">
                      <i class="nav-main-link-icon fa fa-add"></i>
                      <span class="nav-main-link-name">Tambah Anak Yatim</span>
                    </a>
                  </li>

                @else
                  <li class="nav-main-heading">Transaksi</li>
                  
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('donatur.transaksi') }}">
                      <i class="nav-main-link-icon fa fa-money-bill-transfer"></i>
                      <span class="nav-main-link-name">Transaksi</span>
                    </a>
                  </li>
                @endif
                
                @if(Auth::user()->role_id == 1)
                <li class="nav-main-heading">Transaksi</li>
                
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('transaksi.index') }}">
                    <i class="nav-main-link-icon fa fa-money-bill-transfer"></i>
                    <span class="nav-main-link-name">Transaksi</span>
                  </a>
                </li>

                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('transaksi.create') }}">
                    <i class="nav-main-link-icon fa fa-add"></i>
                    <span class="nav-main-link-name">Buat Tagihan</span>
                  </a>
                </li>

                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('transaksi.template') }}">
                    <i class="nav-main-link-icon fa fa-pencil"></i>
                    <span class="nav-main-link-name">Edit Template Email</span>
                  </a>
                </li>
                @else 
                <li class="nav-main-heading">Data Anak Asuh</li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('donatur.anak-asuh') }}">
                    <i class="nav-main-link-icon fa fa-hands-holding-child"></i>
                    <span class="nav-main-link-name">Anak Asuh</span>
                  </a>
                </li>

                <li class="nav-main-heading">Data Anak Yatim</li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('donatur.list') }}">
                    <i class="nav-main-link-icon fa fa-children"></i>
                    <span class="nav-main-link-name">Anak Yatim</span>
                  </a>
                </li>
                @endif
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-flag"></i>
                    <span class="nav-main-link-name">Error</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_error_all.html">
                        <span class="nav-main-link-name">All</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_400.html">
                        <span class="nav-main-link-name">400</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_401.html">
                        <span class="nav-main-link-name">401</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_403.html">
                        <span class="nav-main-link-name">403</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_404.html">
                        <span class="nav-main-link-name">404</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_500.html">
                        <span class="nav-main-link-name">500</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_503.html">
                        <span class="nav-main-link-name">503</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Color Themes -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-wrench"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
                <div class="p-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    Color Themes
                  </h5>
                </div>
                <div class="p-3">
                  <div class="row g-0 text-center">
                    <div class="col-2">
                      <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-elegance" data-toggle="theme" data-theme="{{ asset('assets/css/themes/elegance.min.css') }}" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-pulse" data-toggle="theme" data-theme="{{ asset('assets/css/themes/pulse.min.css') }}" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-flat" data-toggle="theme" data-theme="{{ asset('assets/css/themes/flat.min.css') }}" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-corporate" data-toggle="theme" data-theme="{{ asset('assets/css/themes/corporate.min.css') }}" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-earth" data-toggle="theme" data-theme="{{ asset('assets/css/themes/earth.min.css') }}" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END Color Themes -->

            <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
              <button type="button" class="btn btn-sm btn-alt-secondary">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <i class="fa fa-burn"></i>
              </button>
            </a>
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block fw-semibold">{{ Auth::user()->name }}</span>
                <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="px-2 py-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    {{ Auth::user()->name }}
                  </h5>
                </div>
                <div class="p-2">
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                      <span>Sign Out</span>
                      <i class="fa fa-sign-out-alt"></i>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Close Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Search Section -->
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <button type="submit" class="btn btn-secondary">
                  <i class="fa fa-fw fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="far fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="#" target="_blank">iniwas</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="#" target="_blank">Codebase 5.3</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>
    @yield('js')

  </body>
</html>