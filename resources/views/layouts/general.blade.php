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
<body style="margin-top: 50px"><!-- Margin to move past top navigation -->
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="NavTop">
    <ul class="NavTop__list">
        <li class="NavTop__item">
            <a class="NavTop__link NavTop__link--logo" href="#">DMForge</a>
        </li>
        <li class="NavTop__item NavTop__search-container icon-foo">
            <input class="NavTop__search" type="text" name="search" placeholder="&#xf002;">
        </li>
        <span class="NavTop__right">
            <li class="NavTop__item">
            <a class="NavTop__link" href="#">Account</a>
            </li>
        </span>

    </ul>
</nav>
<div class="Container--centered">
    @yield('container')
</div>
</body>
</html>