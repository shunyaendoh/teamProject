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
    .scripts(['resources/assets/js/photopile.js'], 'public/js/photopile.js')
    .scripts(['resources/assets/js/photopile_wo_main.js'], 'public/js/photopile_wo_main.js')
    .copy(['node_modules/jquery-ui/ui/jquery-1-7.js'], 'resources/assets/js/jquery-ui.js')
    .scripts(['resources/assets/js/jquery-ui.js'], 'public/js/jquery-ui.js')
    .copy(['node_modules/jquery-ui/themes/base/all.css'], 'public/css/jquery-ui.css')
    .copy(['resources/assets/css/photopile.css'], 'public/css/photopile.css')
    .copy(['resources/assets/css/index.css'], 'public/css/index.css')
    .scripts(['resources/assets/js/jqfloat.js'], 'public/js/jqfloat.js')
    .scripts(['resources/assets/js/main.js'], 'public/js/main.js')
    .scripts(['resources/assets/js/wo_main.js'], 'public/js/wo_main.js')
    .scripts(['resources/assets/js/wo_main2.js'], 'public/js/wo_main2.js')
    .copy(['resources/assets/css/lightbox.css'], 'public/css/lightbox.css')
    .scripts(['resources/assets/js/lightbox.js'], 'public/js/lightbox.js')
    .scripts(['resources/assets/js/header.js'], 'public/js/header.js')
    .scripts(['resources/assets/js/profile.js'], 'public/js/profile.js')
    .copy(['resources/assets/css/profile.css'], 'public/css/profile.css')

