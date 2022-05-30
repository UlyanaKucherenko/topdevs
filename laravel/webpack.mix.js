let mix = require('laravel-mix');
require('laravel-mix-sass-resources-loader')

const CompressionPlugin = require('compression-webpack-plugin');

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

mix.options({
    // extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
    // processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
    // purifyCss: false, // Remove unused CSS selectors.
    // uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
    // postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
});


mix.webpackConfig({
      plugins: [
        new CompressionPlugin({
          algorithm: "gzip",
          test: /\.js$|\.css$|\.html$|\.svg$/,
          threshold: 10240,
          minRatio: 0.8
        })
      ],
      resolve: {
        alias: {
            '@': path.resolve('resources/assets/site'),
            '#': path.resolve('')
        }
    },
    output: {
        filename: '[name].js',
        chunkFilename: 'js/chunks/[name].js'
    }
});


mix
	.js('resources/assets/site/js/app.js', 'public/js/site')
	.sass('resources/assets/site/scss/app.scss', 'public/css/site');

mix
  .js('resources/assets/site/js/app-conf.js', 'public/js/site')

mix.sassResources(['resources/assets/site/scss/common/mixins.scss']);
