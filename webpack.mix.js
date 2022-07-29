const mix = require('laravel-mix');

mix.postCss('css/tailwind.css', 'css/compiled.css', [
    require('tailwindcss'),
    require('postcss-nested')
])
    .options({
        processCssUrls: false
    });