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
mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/main.js', 'public/js');
mix.combine([
    'resources/js/libs/jquery/jquery.js',
    'resources/js/libs/jquery/jquery-migrate.min.js',
    // 'resources/js/libs/revslider/jquery.themepunch.tools.min.js',
    // 'resources/js/libs/revslider/jquery.themepunch.revolution.min.js',
    'resources/js/libs/norebro/twentytwenty/jquery.event.move.js',
    'resources/js/libs/norebro/twentytwenty/jquery.twentytwenty.js',
    'resources/js/libs/norebro/customjs.js',
    'resources/js/libs/contact-form-7/scripts.js',
    'resources/js/libs/cf7-conditional-fields/scripts.js',
    'resources/js/libs/norebro/woocommerce-hack.js',
    'resources/js/libs/jquery/ui/core.min.js',
    'resources/js/libs/jquery/ui/position.min.js',
    'resources/js/libs/popup-maker/site.min.js',
    'resources/js/libs/wp/wp-embed.min.js',
    'resources/js/libs/js_composer/js_composer_front.min.js',
    'resources/js/libs/waypoints/waypoints.min.js',
    'resources/js/libs/wp/imagesloaded.min.js',
    'resources/js/libs/wp/masonry.min.js',
    'resources/js/libs/jquery/jquery.masonry.min.js',
    'resources/js/libs/wp/underscore.min.js',
    'resources/js/libs/aos/aos.js',
    'resources/js/libs/isotope/isotope.pkgd.min.js',
    'resources/js/libs/jquery/jquery.mega-menu.min.js',
    'resources/js/libs/norebro/navigation.js',
    'resources/js/libs/norebro/skip-link-focus-fix.js',
    'resources/js/libs/owl.carousel/owl.carousel.min.js',
    'resources/js/libs/norebro/scroll-smooth.min.js'
], 'public/js/vendors.js');


mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/libs/popup-maker/popup-maker.scss', 'public/css/libs')
    .sass('resources/sass/pages/home.scss', 'public/css/pages')
    .sass('resources/sass/blog.scss', 'public/css');
