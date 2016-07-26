@extends('layouts.welcome')

@section('container')
    <h1 class="Heading--centered Heading--banner"><i class="icon-anvil-impact"></i> DMForge</h1>
    <div class="FormPanel">
        <div class="FormPanel__tabs">
            <a href="{!! url('register') !!}" id="RegisterTab" class="Button @if(isset($form) && $form == 'register')Button--active @endif ">Register</a>
            <a href="{!! url('login') !!}" id="LoginTab" class="Button @if(isset($form) && $form == 'login')Button--active @endif ">Log In</a>
        </div>

        <div class="FormPanel__form @if(empty($form) || $form == 'register')Hidden @endif " id="LoginForm">
            @include('auth.partials.login_form')
        </div>
        <div class="FormPanel__form @if(empty($form) || $form == 'login')Hidden @endif " id="RegisterForm">
            @include('auth.partials.register_form')
        </div>

    </div>

@endsection
