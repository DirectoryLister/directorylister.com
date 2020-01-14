const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

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
    watchOptions: { ignored: ['node_modules', 'vendor'] }
});

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css');

mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')]
});

mix.purgeCss({
    whitelist: ['html', 'body', 'fab', 'far', 'fas'],
    whitelistPatterns: [/^fa\-/, /^beer\-/],
});

if (mix.inProduction()) {
    mix.version();
}
