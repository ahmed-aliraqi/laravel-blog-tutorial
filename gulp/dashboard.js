/**
 * This script is responsible for compiling dashboard components.
 */

// import laravel elixir.
const elixir = require('laravel-elixir');

// import elixir components.
require('laravel-elixir-rtl-sass');
require('laravel-elixir-rtl');

elixir((mix) => {

/**
 * Combine sass files (rtl & ltr).
 */
var direction = ['rtl', 'ltr'];

direction.forEach(function (dir) {
    var sass = dir == 'rtl' ? 'rtlsass' : 'sass' ;
    mix[sass]([
        '../dashboard/src/scss/custom.scss',
        '../dashboard/src/scss/daterangepicker.scss'
    ], 'public/dashboard/css/' + dir + '/app.css');
})


mix.scripts([
    '../dashboard/src/js/helpers/smartresize.js',
    '../dashboard/src/js/custom.js'
], 'public/dashboard/js/app.js');


/**
 * Convert vendors plugins files to public
 */
mix.copy('resources/assets/dashboard/vendors/jquery', 'public/dashboard/vendors/jquery');
mix.copy('resources/assets/dashboard/vendors/bootstrap', 'public/dashboard/vendors/bootstrap');
mix.copy('resources/assets/dashboard/vendors/font-awesome', 'public/dashboard/vendors/font-awesome');
mix.copy('resources/assets/dashboard/vendors/nprogress', 'public/dashboard/vendors/nprogress');
mix.copy('resources/assets/dashboard/vendors/iCheck', 'public/dashboard/vendors/iCheck');
mix.copy('resources/assets/dashboard/vendors/fastclick', 'public/dashboard/vendors/fastclick');

// Copy images files to public.
mix.copy('resources/assets/dashboard/production/images', 'public/dashboard/images/');

/**
 * Convert vendors plugins to rtl.
 */
mix.rtl('public/dashboard/vendors/bootstrap/dist/**/*.css',
    'public/dashboard/vendors/rtl/bootstrap/dist');

mix.copy('resources/assets/dashboard/vendors/bootstrap/dist/fonts', 'public/dashboard/vendors/rtl/bootstrap/dist/fonts');



});
