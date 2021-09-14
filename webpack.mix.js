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

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

mix.scripts(
    [
        // "node_modules/clientjs/dist/client.min.js",
        "resources/assets/vendors/global/vendors.bundle.js",
        "resources/assets/js/demo1/scripts.bundle.js",
        "resources/assets/js/demo1/pages/login/login-general.js",
    ],
    "public/js/all.js"
);

mix.styles(
    [
        "resources/assets/css/demo1/pages/general/login/login-3.css",
        "resources/assets/vendors/global/vendors.bundle.css",
        "resources/assets/css/demo1/style.bundle.css",
    ],
    "public/css/all.css"
);

// CANVAS HTML JS
mix.scripts([
    "resources/assets/js/jquery.js",
    "resources/assets/js/plugins.min.js",
    "resources/assets/js/functions.js",
], 'public/js/canvas.js');

// CANVAS HTML CSS
mix.styles([
    "resources/assets/css/bootstrap.css",
    "resources/assets/css/style.css",
    "resources/assets/css/swiper.css",
    "resources/assets/css/dark.css",
    "resources/assets/css/font-icons.css",
    "resources/assets/css/animate.css",
    "resources/assets/css/magnific-popup.css",
    "resources/assets/css/custom.css",
], 'public/css/canvas.css');
