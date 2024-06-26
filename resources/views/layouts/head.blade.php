<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Myo Nyut (Private High School)</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        @import url('https://fonts.cdnfonts.com/css/source-sans-pro');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        table{
            font-size: 14px;
        }
        .logo-name{
            color: #FFF;
            text-align: center;
            font-family: Source Sans Pro;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            text-transform: capitalize;
        }
        .sub-name{
            color: #FFF;
            text-align: center;
            font-family: Source Sans Pro;
            font-size: 10px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-transform: capitalize;
        }
        .sidebar-bg{
            background: #6A9113;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ccff00, #6A9113);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #232700, #6A9113); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>
    @yield('css')
</head>

<body id="page-top">
