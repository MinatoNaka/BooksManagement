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
    .js('resources/js/views/users/index.js', 'public/js/views/users')
    .js('resources/js/views/categories/index.js', 'public/js/views/categories')
    .js('resources/js/views/books/index.js', 'public/js/views/books')
    .js('resources/js/views/reviews/index.js', 'public/js/views/reviews')
    .sass('resources/sass/app.scss', 'public/css')
    .version();

mix.copyDirectory('resources/assets/img', 'public/img');
