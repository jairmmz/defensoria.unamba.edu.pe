<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Defensoría Universitaria</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css text editor for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/summernote/dist/summernote-bs4.css') }}">
    <!-- End plugin css simple icons for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') }}">
    <!-- plugin css themify for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ti-icons/css/themify-icons.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
    <div class="container-scroller">
        <!-- header -->
        @include('backend.layouts.header')
        <!-- header -->
        <div class="container-fluid page-body-wrapper">

            <!-- sidebar skins -->
            @include('backend.layouts.sidebar-skins')
            <!-- sidebar skins end-->

            <!-- navigation -->
            @include('backend.layouts.navigation')
            <!-- navigation -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- Content --}}
                    @yield('content')
                    {{-- End Content --}}

                    @include('backend.layouts.footer')

                </div>
            </div>
        </div>

    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js basic_elements this page-->
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js advanced_elements for this page-->
    <script src="{{ asset('assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/form-addons.js') }}"></script>
    <script src="{{ asset('assets/js/x-editable.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/form-repeater.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js validation for this page-->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bt-maxLength.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js wizard for this page-->
    <script src="{{ asset('assets/js/wizard.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- plugin js for this page -->
    <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinymce/themes/modern/theme.js') }}"></script>
    <script src="{{ asset('assets/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
    <!-- plugin js for this page -->

    <!-- Custom js text editor for this page-->
    <script src="{{ asset('assets/js/editorDemo.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js chartjs for this page-->
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js morris for this page-->
    <script src="{{ asset('assets/js/morris.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js data table for this page-->
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js data tablesorter for this page-->
    <script src="{{ asset('assets/js/tablesorter.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js popups for this page-->
    <script src="{{ asset('assets/js/alerts.js') }}"></script>
    <script src="{{ asset('assets/js/avgrund.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Custom js notifications for this page-->
    <script src="{{ asset('assets/js/toastDemo.js') }}"></script>
    <script src="{{ asset('assets/js/desktop-notification.js') }}"></script>
    <!-- End custom js for this page-->

    {{-- @if (Route::currentRouteName() == 'admin.dashboard')
        <!-- Custom js dashboard for this page-->
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <!-- End custom js for this page-->   
    @endif --}}
</body>

</html>
