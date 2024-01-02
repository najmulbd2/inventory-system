<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ ('backend/assets/') }}"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Error - This website can't be release</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ ('backend/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ ('backend/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ ('backend/assets/vendor/css/pages/page-misc.css') }}" />
    <!-- Helpers -->
    <script src="{{ ('backend/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js') }} in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js') }}.  -->
    <script src="{{ ('backend/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ ('backend/assets/js/config.js') }}"></script>
</head>

<body>
<!-- Content -->

<!-- Error -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h1 class="mb-2 mx-2">Page Not Found :(</h1>
        <p class="mb-4 mx-2">We couldn't find the page you are looking for</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
        <div class="mt-3">
            <img
                src="{{ ('backend/assets/img/illustrations/page-misc-error-light.png') }}"
                alt="page-misc-error-light"
                width="500"
                class="img-fluid"
                data-app-light-img="illustrations/page-misc-error-light.png"
                data-app-dark-img="illustrations/page-misc-error-dark.png"
            />
        </div>
    </div>
</div>
<!-- /Error -->

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js') }} -->
<script src="{{ ('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ ('backend/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ ('backend/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ ('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ ('backend/assets/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ ('backend/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ ('backend/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ ('backend/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{ ('backend/assets/js/main.js') }}"></script>

<!-- Page JS -->
</body>
</html>
