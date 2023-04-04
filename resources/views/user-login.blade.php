<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - Welcome to University</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
      * Template Name: NiceAdmin
      * Updated: Mar 09 2023 with Bootstrap v5.2.3
      * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
  </head>
  <body>
    <main>
      <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                  <a href="/" class="logo d-flex align-items-center w-auto">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    <span class="d-none d-lg-block">NiceAdmin</span>
                  </a>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                      <p class="text-center small">Enter your username & password to login</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                      @csrf
                      <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                          <span class="input-group-text" id="username-icon"><i class="bi bi-person"></i></span>
                          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required autofocus>
                          <div class="invalid-feedback">
                            Please enter your username
                          </div>
                          @error('username')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
  
                      <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                          <span class="input-group-text" id="password-icon"><i class="bi bi-lock"></i></span>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                          <div class="invalid-feedback">
                            Please enter your password
                          </div>
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
  
                      <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                              Remember Me
                            </label>
                          </div>
                          @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="small">Forgot Your Password?</a>
                          @endif
                        </div>
                      </div>
  
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                      </div>
                    </form>
  
                    <hr>
  
                  </div><!-- End Card Body -->
                </div><!-- End Card -->
  
              </div><!-- End Col -->
            </div><!-- End Row -->
          </div><!-- End Container -->
        </section><!-- End Section -->
  
      </div><!-- End Container -->
    </main><!-- End Main -->
  
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  
  </body>
  
  </html>