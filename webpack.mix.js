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

mix
.js('resources/js/app.js', 'public/assets/js')
.js('resources/assets/prism.js', 'public/assets/js')

.postCss('resources/css/app.css', 'public/assets/css', [
  require('postcss-import'),
  require('tailwindcss'),
])

.postCss('resources/assets/prism.css', 'public/assets/css')

mix.copyDirectory('resources/assets/tinymce', 'public/assets/tinymce');


if (mix.inProduction()) {
    mix.version();
}
