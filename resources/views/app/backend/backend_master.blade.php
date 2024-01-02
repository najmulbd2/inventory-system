<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('backend/assets/') }}"
    data-template="vertical-menu-template-no-customizer"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Easy Fashion Ltd. | The Most Loved & Top Pioneer Fashion Brand of Bangladesh</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/logo.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/theme-semi-dark.css') }}" class="template-customizer-theme-css" />
{{--    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />--}}
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Taken for from-validation -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Taken for pages-account-settings-account -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />

    <!-- Taken for forms-editors -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/editor.css') }}" />

    <!-- Taken for forms-file-upload -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/dropzone/dropzone.css') }}" />

    <!-- Taken for forms-pickers -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/pickr/pickr-themes.css') }}" />

    <!-- forms-selects No needed already taken of others pages -->

    <!-- Taken for forms-sliders -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/nouislider/nouislider.css') }}" />

    <!-- Taken for forms-extras -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />

    <!-- Taken for app-calendar -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/fullcalendar/fullcalendar.css') }}" />

    <!-- Taken for ui-toasts -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/toastr/toastr.css') }}" />

    <!-- Taken for ui-spinners -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/spinkit/spinkit.css') }}" />

    <!-- Taken for app-user-list -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />

    <!-- Taken for data-tables-basic -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />

    <!-- Taken for pages-profile-user -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/pages/page-profile.css') }}" />

    <!-- Taken for pages-account-settings-security -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/pages/page-account-settings.css') }}" />



    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/pages/app-calendar.css') }}" />

    @yield('css')
    <!-- Helpers -->
    <script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js') }} in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        @include('app.backend.body.sidebar')
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('app.backend.body.header')
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                <!-- / Content -->
                </div>
                <!-- Footer -->
                @include('app.backend.body.footer')
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
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js') }} -->
<script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('backend/assets/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ asset('backend/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Taken for from-validation -->
<script src="{{ asset('backend/assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

<!-- Taken for pages-account-settings-account -->
<script src="{{ asset('backend/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

<!-- Taken for forms-editors -->
<script src="{{ asset('backend/assets/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/quill/quill.js') }}"></script>

<!-- Taken for forms-file-upload -->
<script src="{{ asset('backend/assets/vendor/libs/dropzone/dropzone.js') }}"></script>

<!-- Taken for forms-pickers -->
<script src="{{ asset('backend/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/pickr/pickr.js') }}"></script>

<!-- Taken for forms-selects -->
<script src="{{ asset('backend/assets/vendor/libs/bloodhound/bloodhound.js') }}"></script>

<!-- Taken for forms-sliders -->
<script src="{{ asset('backend/assets/vendor/libs/nouislider/nouislider.js') }}"></script>

<!-- Taken for forms-extras -->
<script src="{{ asset('backend/assets/vendor/libs/autosize/autosize.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>

<!-- Taken for app-calendar -->
<script src="{{ asset('backend/assets/vendor/libs/fullcalendar/fullcalendar.js') }}"></script>

<!-- Taken for ui-toasts -->
<script src="{{ asset('backend/assets/vendor/libs/toastr/toastr.js') }}"></script>

<!-- Taken for app-user-list -->
<script src="{{ asset('backend/assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/jszip/jszip.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>

<!-- Taken for data-tables-basic -->
<script src="{{ asset('backend/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"></script>
<!-- Row Group JS -->
<script src="{{ asset('backend/assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js') }}"></script>

<!-- Taken for no needed pages-profile-user -->








<!-- Main JS -->
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>
<script src="{{ asset('backend/assets/js/form-validation.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-editors.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-file-upload.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-pickers.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-selects.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-tagify.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-typeahead.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-sliders.js') }}"></script>
<script src="{{ asset('backend/assets/js/forms-extras.js') }}"></script>
<script src="{{ asset('backend/assets/js/app-calendar-events.js') }}"></script>
<script src="{{ asset('backend/assets/js/app-calendar.js') }}"></script>
<script src="{{ asset('backend/assets/js/ui-toasts.js') }}"></script>
<script src="{{ asset('backend/assets/js/app-user-list.js') }}"></script>
<script src="{{ asset('backend/assets/js/tables-datatables-basic.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages-profile.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages-account-settings-account.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages-account-settings-security.js') }}"></script>
<script src="{{ asset('backend/assets/js/modal-enable-otp.js') }}"></script>


<script>
    @if(Session::has('message'))
        toastr.options = {
        "progressBar" : true,
        "closeButton" : true,
    }
    let type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}",'Success!');
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}",'Warning!');
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}",'Failed!');
            break;
    }
    @endif
</script>

<script type="text/javascript">
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function startTime() {
        let asiaDhaka = new Date().toLocaleString([], { timeZone: "Asia/Dhaka" });
        let today = new Date(asiaDhaka);

        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        // add a zero in front of numbers<10
        let isFormat12H = true;
        let ampm = "";
        if (isFormat12H) {
            ampm = h >= 12 ? " PM" : " AM";
            h = h % 12;
            h = h ? h : 12;
        }
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById("time").innerHTML = h + ":" + m + ":" + s + ampm;
        t = setTimeout(function () {
            startTime();
        }, 1000);
    }
    startTime();
</script>

@yield('js')

</body>
</html>
