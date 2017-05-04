const { mix } = require('laravel-mix');
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

 mix.webpackConfig({
  module: {
    loaders: [{
      test: /\.js$/,
      loaders: ['ng-annotate'],
      exclude: /node_modules/,
    }]
  }
});

mix
  .copy(['resources/views/**/*.html'], 'public/html/')
  .js('resources/assets/js/app.js', 'public/js')
  .extract(['angular'])
  .sass('resources/assets/sass/app.scss', 'public/css')
  .version();

mix.browserSync('http://localhost:8000/');
