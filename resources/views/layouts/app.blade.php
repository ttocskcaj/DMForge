<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    @include('layouts.partials.common')
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="NavTop">
    <ul class="NavTop__list">
        <li class="NavTop__item">
            <a class="NavTop__link NavTop__link--logo" href="#">DMForge</a>
        </li>
        <li class="NavTop__item NavTop__item--right">
            <a class="NavTop__link" href="#">Account</a>
        </li>
        <li class="NavTop__item NavTop__item--right">
            <a class="NavTop__link" href="#">File</a>
        </li>
    </ul>
</nav>
<nav class="NavSide">
    <ul class="NavSide__list">
        <li class="NavSide__item">
            <a href="#" class="NavSide__link NavSide__link--active">
                <i class="NavSide__image icon-home"></i>
                <span class="NavSide__text">Dashboard</span>
            </a>
        </li>
        <li class="NavSide__item">
            <a class="NavSide__link" href="#">
                <i class="NavSide__image icon-journey"></i>
                <span class="NavSide__text">Adventures</span>
            </a>
        </li>
        <li class="NavSide__item">
            <a class="NavSide__link " href="#">
                <i class="NavSide__image icon-cement-shoes"></i>
                <span class="NavSide__text">NPCs</span>
            </a>
        </li>
        <li class="NavSide__item">
            <a class="NavSide__link" href="#">
                <i class="NavSide__image icon-village"></i>
                <span class="NavSide__text">Locations</span>
            </a>
        </li>
    </ul>
</nav>
<div class="Container">
    @yield('container')
</div>
</body>
</html>