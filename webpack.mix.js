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


// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', [
    //
    ]);

mix.sass('resources/sass/custom_scss/intro/intro.scss', 'public/css', [
    //
]);

mix.sass('resources/sass/custom_scss/admin-tour/admin-tour.scss', 'public/css', [
    //
]);

mix.sass('resources/sass/custom_scss/admin-category/admin-category.scss', 'public/css', [
    //
]);

mix.sass('resources/sass/custom_scss/admin-account/admin-account.scss', 'public/css', [
    //
]);

