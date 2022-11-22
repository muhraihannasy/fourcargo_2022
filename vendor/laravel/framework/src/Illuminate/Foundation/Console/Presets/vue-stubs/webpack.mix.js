let mix = require("laravel-mix");

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

// mix
//   .js("resources/assets/js/app.js", "public/js")
//   .sass("resources/assets/sass/app.scss", "public/css");

mix
   .js("themes/fourcargo/assets/js/app.js", 'themes/fourcargo/assets/js')
   .postCss("themes/fourcargo/assets/css/output.css", "themes/fourcargo/assets/css", [
      require('tailwindcss'),
   ]);
