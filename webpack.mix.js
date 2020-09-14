const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.webpackConfig({
    watchOptions: { ignored: ['node_modules', 'vendor'] }
});

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css');

mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')]
});

if (mix.inProduction()) {
    mix.version();
}
