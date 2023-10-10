<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Defensoría - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/icon-du.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo text-center">
                <img src="{{ asset('assets/images/logo-defensoria-universitaria.png') }}" alt="logo">
              </div>
              <h4 class="text-center">Recuperar contraseña</h4>
              <form role="form" method="POST" action="{{ route('login.forgot-password.perform') }}" class="pt-3" autocomplete="off">
                @csrf
                @method('POST')
                <div class="form-group">
                  <label for="exampleInputEmail">Correo electrónico:</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" placeholder="ejemplo@gmail.com" value="{{ old('email') }}">
                  </div>
                  @error('email') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium">Recuperar contraseña</button>
                </div>
              </form>
              <a href="{{ route('login.perform') }}" class="auth-link text-black">Iniciar sesión</a>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <b class="text-white font-weight-medium text-center flex-grow align-self-end mb-2">
              Copyright &copy;
              <script>
                  var CurrentYear = new Date().getFullYear()
                  document.write(CurrentYear + ",");
              </script>
              Defensoría Universitaria - UNAMBA</b>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- plugins:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>
</html>
