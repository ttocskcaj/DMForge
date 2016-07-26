var elixir = require('laravel-elixir');
require('laravel-elixir-lost');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sassLost('app.scss', 'public/css/app.css');
    mix.scripts([
        'jquery/jquery.min.js',
        'login_register.js'
    ])

});
