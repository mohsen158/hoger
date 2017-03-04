var elixir = require('laravel-elixir');
var browserSync = require('laravel-elixir-browsersync2');
require('laravel-elixir-webpack');
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

elixir(function(mix) {
     mix.browserSync({
       proxy : 'http://127.0.0.1:8000/foods/'
     });
    mix.webpack('app.js');
});
