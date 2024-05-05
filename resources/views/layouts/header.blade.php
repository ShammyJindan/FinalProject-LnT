<!doctype html>
<html lang="en" dir="ltr">

<head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords"
            content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

        <!-- TITLE -->
        <title>Final Project LnT</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/dark-style.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/transparent-style.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/skin-modes.css')}}" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="{{ asset('assets/css/icons.css')}} " rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css')}}" />
</head>

<body class="app sidebar-mini ltr">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        {{-- <img src="../assets/images/loader.svg" class="loader-img" alt="Loader"> --}}
        {{-- <div class="dimmer active" style="text-align:center; top:30% !important;">
            <div class="spinner loader-img"></div>
        </div> --}}
        <div class="spinner-border text-dark me-2" role="status" style="width: 3rem; height: 3rem; position: absolute; top: 43% !important; margin: 0 auto;">
            <span class="visually-hidden">Loading...</span>
        </div>
        {{-- <div class="dimmer active">
            <div class="lds-ring" style="position: absolute; top: 200px; !important margin: 0 auto;">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> --}}
    </div>

    <!-- /GLOBAL-LOADER -->
