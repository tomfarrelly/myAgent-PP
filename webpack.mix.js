/**
 * @Author: tomfarrelly
 * @Date:   2020-12-16T22:20:03+00:00
 * @Last modified by:   tomfarrelly
 * @Last modified time: 2021-03-13T22:42:35+00:00
 */



const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
