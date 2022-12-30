<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Anak Yatim Platform</title>

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <div id="page-container" class="main-content-boxed">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-body-dark">
          <div class="row mx-0 justify-content-center">
            <div class="hero-static col-lg-6 col-xl-4">
              <div class="content content-full overflow-hidden">
                <!-- Header -->
                <div class="py-4 text-center">
                  <a class="link-fx fw-bold" href="#">
                    <i class="fa fa-child-reaching"></i>
                    <span class="fs-4 text-body-color">wali</span><span class="fs-4">yatim</span>
                  </a>
                  <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
                  <h2 class="h5 fw-medium text-muted mb-0">It’s a great day today!</h2>
                </div>
                <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="block block-themed block-rounded block-fx-shadow">
                    <div class="block-header bg-gd-dusk">
                      <h3 class="block-title">Please Sign In</h3>
                    </div>
                    <div class="block-content">
                      <div class="form-floating mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label class="form-label" for="email">Email</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label class="form-label" for="password">Password</label>
                      </div>
                      <div class="row">
                        <!-- <div class="col-sm-6 d-sm-flex align-items-center push">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me">
                            <label class="form-check-label" for="login-remember-me">Remember Me</label>
                          </div>
                        </div> -->
                        <div class="col-12 text-sm-end push">
                          <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                            Sign In
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                      <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('register') }}">
                        <i class="fa fa-plus opacity-50 me-1"></i> Create Account
                      </a>
                    </div>
                  </div>
                </form>
                <!-- END Sign In Form -->
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS
    
        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>

    <!-- jQuery (required for Select2 + jQuery Validation plugins) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signin.min.js"></script>
  </body>
</html> 