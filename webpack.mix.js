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

mix.webpackConfig({
    output: {
        // Chunks in webpack
        publicPath: '/',
        chunkFilename: 'js/components/[name].js',
    },
});

mix.webpackConfig({ devtool: "inline-source-map" });

mix
  .sourceMaps()
  .options({
    processCssUrls: false
  });

mix
   // .js('resources/js/admin.js', 'public/js')
   .js('resources/js/front.js', 'public/js')
   .sass('resources/sass/front.scss', 'public/css')
   // .sass('resources/sass/admin.scss', 'public/css')
   ;

