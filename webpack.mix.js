const mix = require("laravel-mix");

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

mix.js("resources/panel/js/app.js", "public/panel/js")
    .js("resources/panel/js/via-cep.js", "public/panel/js")
    .sass("resources/panel/sass/app.scss", "public/panel/css")
    .copy("node_modules/dropify/dist/js/dropify.min.js", "public/panel/js")
    .copy("node_modules/dropify/dist/css/dropify.min.css", "public/panel/css")
    .copyDirectory("node_modules/dropify/dist/fonts", "public/panel/fonts")
    .copyDirectory("resources/panel/img", "public/panel/img")
    .copyDirectory("node_modules/admin-lte/plugins", "public/panel/js/plugins");
