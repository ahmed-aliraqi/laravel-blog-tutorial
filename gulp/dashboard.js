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
    ], 'public/dashboard-asset/css/' + dir + '/app.css');
})


mix.scripts([
    '../dashboard/src/js/helpers/smartresize.js',
    '../dashboard/src/js/custom.js'
], 'public/dashboard-asset/js/app.js');


/**
 * Convert vendors plugins files to public
 */
mix.copy('resources/assets/dashboard/vendors/jquery', 'public/dashboard-asset/vendors/jquery');
mix.copy('resources/assets/dashboard/vendors/bootstrap', 'public/dashboard-asset/vendors/bootstrap');
mix.copy('resources/assets/dashboard/vendors/font-awesome', 'public/dashboard-asset/vendors/font-awesome');
mix.copy('resources/assets/dashboard/vendors/nprogress', 'public/dashboard-asset/vendors/nprogress');
mix.copy('resources/assets/dashboard/vendors/iCheck', 'public/dashboard-asset/vendors/iCheck');
mix.copy('resources/assets/dashboard/vendors/fastclick', 'public/dashboard-asset/vendors/fastclick');
mix.copy('resources/assets/dashboard/vendors/animate.css', 'public/dashboard-asset/vendors/animate.css');

// Copy images files to public.
mix.copy('resources/assets/dashboard/production/images', 'public/dashboard-asset/images/');

/**
 * Convert vendors plugins to rtl.
 */
mix.rtl('public/dashboard-asset/vendors/bootstrap/dist/**/*.css',
    'public/dashboard-asset/vendors/rtl/bootstrap/dist');

mix.copy('resources/assets/dashboard/vendors/bootstrap/dist/fonts', 'public/dashboard-asset/vendors/rtl/bootstrap/dist/fonts');



});
