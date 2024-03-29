<!DOCTYPE>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
</head>
<body>
<div id="page">
    <div id="entete">
        <img src="{{ asset('images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
        <h1>Panel d'aministration</h1>
    </div>
    @yield('menu')
    @yield('contenu1')
    @yield('contenu2')
</div>

</body>
</html>
