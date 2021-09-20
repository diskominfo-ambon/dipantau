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

mix.js('resources/javascript/packs/reports/*.js', 'public/js/packs/reports')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/dashboard.scss', 'public/css')
    .vue()
    .sourceMaps();

mix.babelConfig({
    plugins: ['@babel/plugin-syntax-dynamic-import'],
});

mix.webpackConfig({
    resolve: {
        alias: {
            '~': `${__dirname}/resources/javascript`
        }
    }
});
