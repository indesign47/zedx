<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ public_asset(elixir_frontend('css/styles.css')) }}" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ public_asset('favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ public_asset('favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ public_asset('favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ public_asset('favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ public_asset('favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ public_asset('favicons/apple-touch-icon-120x120.png') }}">
    <link rel="icon" type="image/png" href="{{ public_asset('favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ public_asset('favicons/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ public_asset('favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ public_asset('favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ public_asset('favicons/safari-pinned-tab.svg') }}" color="#1abc9c">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @yield('css')
    <title>@yield('error') Error</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('frontend::templates.partials.header')

    <!-- Page Content -->
    <div class="container">
        @yield('content')
    </div>

    @include('frontend::templates.partials.footer')
    <!-- /.container -->

    <script src="{{ public_asset(elixir_frontend('js/scripts.js')) }}"></script>

</body>

</html>
