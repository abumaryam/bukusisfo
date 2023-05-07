const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .copyDirectory('resources/views/layouts/img','public/img')
    .copyDirectory('resources/images','public/images')
    .copyDirectory('resources/views/layouts/css','public/css')
    .copyDirectory('resources/views/layouts/js','public/js')
    .copyDirectory('resources/views/layouts/vendor','public/vendor');
