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
    .copy(['node_modules/jquery-ui/ui/jquery-1-7.js'], 'resources/assets/js/jquery-ui.js')
    .scripts(['resources/assets/js/jquery-ui.js'], 'public/js/jquery-ui.js')
    .copy(['node_modules/jquery-ui/themes/base/all.css'], 'public/css/jquery-ui.css')
    .copy(['resources/assets/css/photopile.css'], 'public/css/photopile.css')
    .copy(['resources/assets/css/index.css'], 'public/css/index.css')
    .scripts(['resources/assets/js/jqfloat.js'], 'public/js/jqfloat.js');
