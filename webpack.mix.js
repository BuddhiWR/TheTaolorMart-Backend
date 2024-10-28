// webpack.mix.js
const mix = require('laravel-mix');

// Compile SCSS to CSS
mix.sass('resources/css/app.scss', 'public/css')
   .options({
       processCssUrls: false // Prevents processing of URLs
   })
   .version(); // Cache-busting for production

// Compile JavaScript
mix.js('resources/js/app.js', 'public/js')
   .version();
