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
        // "resources/js/custom/register.js",
        // "resources/js/custom/login.js",
        // "resources/js/custom/reset.js"
    ],
    "public/js/all.js"
);

mix.styles(
    [
        "resources/assets/css/demo1/pages/general/login/login-3.css",
        "resources/assets/vendors/global/vendors.bundle.css",
        "resources/assets/css/demo1/style.bundle.css",
        // "resources/assets/css/demo1/skins/header/base/light.css",
        // "resources/assets/css/demo1/skins/header/menu/light.css",
        // "resources/assets/css/demo1/skins/brand/dark.css",
        // "resources/assets/css/demo1/skins/aside/dark.css",
        // "resources/assets/custom/css/projects.css"
    ],
    "public/css/all.css"
);
