<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <!-- Fontawsome Icons with my KIT CODE -->
    <script src="https://kit.fontawesome.com/7532718861.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pizza 66') }}</title>

    <link rel="icon" href="{!! asset('/images/icon.png') !!}"/>

    <link rel="stylesheet" type="text/css" href="/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>    

    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="logo-wrapper">
                            <a href="/"><img src="/img/logo.png" alt="pizza 66 logo" class="img-fluid"></a>                            
                        </div>
                        <div class="user-wrapper nowrap">
                            <a href="#" class="a-secondary nowrap"><i class="fas fa-sign-in-alt mr-1 enlarge-mobile" aria-hidden="true"></i><span class="hide-mobile">prijava</span></a>
                            <a href="#" class="a-secondary nowrap"><i class="fas fa-user-plus mr-1 enlarge-mobile"></i></i><span class="hide-mobile">registracija</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>