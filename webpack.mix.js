const mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for your application, as well as bundling up your JS files.
|
*/

mix.copyDirectory('resources/__sb-admin2/img', 'public/img');
mix.copyDirectory('resources/__sb-admin2/vendor', 'public/vendor');

mix.sass('resources/__sb-admin2/scss/sb-admin-2.scss', 'public/css');
mix.js('resources/__sb-admin2/js/sb-admin-2.js', 'public/js');
