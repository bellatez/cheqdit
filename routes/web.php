<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::resource('user', 'Users\UserController');

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/advanced-ui-kits-image-crop', function () {
    return view('helpers.advanced-ui-kits-image-crop');
});
Route::get('/advanced-ui-kits-jquery-confirm', function () {
    return view('helpers.advanced-ui-kits-jquery-confirm');
});
Route::get('/advanced-ui-kits-nestable', function () {
    return view('helpers.advanced-ui-kits-nestable');
});
Route::get('/advanced-ui-kits-pnotify', function () {
    return view('helpers.advanced-ui-kits-pnotify');
});
Route::get('/advanced-ui-kits-range-slider', function () {
    return view('helpers.advanced-ui-kits-range-slider');
});
Route::get('/advanced-ui-kits-ratings', function () {
    return view('helpers.advanced-ui-kits-ratings');
});
Route::get('/advanced-ui-kits-session-timeout', function () {
    return view('helpers.advanced-ui-kits-session-timeout');
});
Route::get('/advanced-ui-kits-sweet-alerts', function () {
    return view('helpers.advanced-ui-kits-sweet-alerts');
});
Route::get('/advanced-ui-kits-switchery', function () {
    return view('helpers.advanced-ui-kits-switchery');
});
Route::get('/advanced-ui-kits-toolbar', function () {
    return view('helpers.advanced-ui-kits-toolbar');
});
Route::get('/advanced-ui-kits-tour', function () {
    return view('helpers.advanced-ui-kits-tour');
});
Route::get('/advanced-ui-kits-treeview', function () {
    return view('helpers.advanced-ui-kits-treeview');
});
Route::get('/apps-calender', function () {
    return view('helpers.apps-calender');
});
Route::get('/apps-chat', function () {
    return view('helpers.apps-chat');
});
Route::get('/apps-email-compose', function () {
    return view('helpers.apps-email-compose');
});
Route::get('/apps-email-inbox', function () {
    return view('helpers.apps-email-inbox');
});
Route::get('/apps-email-open', function () {
    return view('helpers.apps-email-open');
});
Route::get('/apps-kanban-board', function () {
    return view('helpers.apps-kanban-board');
});
Route::get('/apps-onboarding-screens', function () {
    return view('helpers.apps-onboarding-screens');
});
Route::get('/basic-ui-kits-alerts', function () {
    return view('helpers.basic-ui-kits-alerts');
});
Route::get('/basic-ui-kits-badges', function () {
    return view('helpers.basic-ui-kits-badges');
});
Route::get('/basic-ui-kits-buttons', function () {
    return view('helpers.basic-ui-kits-buttons');
});
Route::get('/basic-ui-kits-cards', function () {
    return view('helpers.basic-ui-kits-cards');
});
Route::get('/basic-ui-kits-carousel', function () {
    return view('helpers.basic-ui-kits-carousel');
});
Route::get('/basic-ui-kits-collapse', function () {
    return view('helpers.basic-ui-kits-collapse');
});
Route::get('/basic-ui-kits-dropdowns', function () {
    return view('helpers.basic-ui-kits-dropdowns');
});
Route::get('/basic-ui-kits-embeds', function () {
    return view('helpers.basic-ui-kits-embeds');
});
Route::get('/basic-ui-kits-grids', function () {
    return view('helpers.basic-ui-kits-grids');
});
Route::get('/basic-ui-kits-images', function () {
    return view('helpers.basic-ui-kits-images');
});
Route::get('/basic-ui-kits-media', function () {
    return view('helpers.basic-ui-kits-media');
});
Route::get('/basic-ui-kits-modals', function () {
    return view('helpers.basic-ui-kits-modals');
});
Route::get('/basic-ui-kits-paginations', function () {
    return view('helpers.basic-ui-kits-paginations');
});
Route::get('/basic-ui-kits-popovers', function () {
    return view('helpers.basic-ui-kits-popovers');
});
Route::get('/basic-ui-kits-progressbars', function () {
    return view('helpers.basic-ui-kits-progressbars');
});
Route::get('/basic-ui-kits-spinners', function () {
    return view('helpers.basic-ui-kits-spinners');
});
Route::get('/basic-ui-kits-tabs', function () {
    return view('helpers.basic-ui-kits-tabs');
});
Route::get('/basic-ui-kits-toasts', function () {
    return view('helpers.basic-ui-kits-toasts');
});
Route::get('/basic-ui-kits-tooltips', function () {
    return view('helpers.basic-ui-kits-tooltips');
});
Route::get('/basic-ui-kits-typography', function () {
    return view('helpers.basic-ui-kits-typography');
});
Route::get('/chart-apex', function () {
    return view('helpers.chart-apex');
});
Route::get('/chart-c3', function () {
    return view('helpers.chart-c3');
});
Route::get('/chart-chartistjs', function () {
    return view('helpers.chart-chartistjs');
});
Route::get('/chart-chartjs', function () {
    return view('helpers.chart-chartjs');
});
Route::get('/chart-flot', function () {
    return view('helpers.chart-flot');
});
Route::get('/chart-knob', function () {
    return view('helpers.chart-knob');
});
Route::get('/chart-morris', function () {
    return view('helpers.chart-morris');
});
Route::get('/chart-piety', function () {
    return view('helpers.chart-piety');
});
Route::get('/chart-sparkline', function () {
    return view('helpers.chart-sparkline');
});
Route::get('/dashboard-ecommerce', function () {
    return view('helpers.dashboard-ecommerce');
});
Route::get('/dashboard-hospital', function () {
    return view('helpers.dashboard-hospital');
});
Route::get('/dashboard-crypto', function () {
    return view('helpers.dashboard-crypto');
});
Route::get('/dashboard-school', function () {
    return view('helpers.dashboard-school');
});
Route::get('/ecommerce-cart', function () {
    return view('helpers.ecommerce-cart');
});
Route::get('/ecommerce-checkout', function () {
    return view('helpers.ecommerce-checkout');
});
Route::get('/ecommerce-myaccount', function () {
    return view('helpers.ecommerce-myaccount');
});
Route::get('/ecommerce-order-detail', function () {
    return view('helpers.ecommerce-order-detail');
});
Route::get('/ecommerce-order-list', function () {
    return view('helpers.ecommerce-order-list');
});
Route::get('/ecommerce-product-detail', function () {
    return view('helpers.ecommerce-product-detail');
});
Route::get('/ecommerce-product-list', function () {
    return view('helpers.ecommerce-product-list');
});
Route::get('/ecommerce-shop', function () {
    return view('helpers.ecommerce-shop');
});
Route::get('/ecommerce-single-product', function () {
    return view('helpers.ecommerce-single-product');
});
Route::get('/ecommerce-thankyou', function () {
    return view('helpers.ecommerce-thankyou');
});
Route::get('/error-404', function () {
    return view('helpers.error-404');
});
Route::get('/error-500', function () {
    return view('helpers.error-500');
});
Route::get('/error-comingsoon', function () {
    return view('helpers.error-comingsoon');
});
Route::get('/error-maintenance', function () {
    return view('helpers.error-maintenance');
});
Route::get('/form-colorpickers', function () {
    return view('helpers.form-colorpickers');
});
Route::get('/form-datepickers', function () {
    return view('helpers.form-datepickers');
});
Route::get('/form-editors', function () {
    return view('helpers.form-editors');
});
Route::get('/form-file-uploads', function () {
    return view('helpers.form-file-uploads');
});
Route::get('/form-groups', function () {
    return view('helpers.form-groups');
});
Route::get('/form-input-mask', function () {
    return view('helpers.form-input-mask');
});
Route::get('/form-inputs', function () {
    return view('helpers.form-inputs');
});
Route::get('/form-layouts', function () {
    return view('helpers.form-layouts');
});
Route::get('/form-maxlength', function () {
    return view('helpers.form-maxlength');
});
Route::get('/form-selects', function () {
    return view('helpers.form-selects');
});
Route::get('/form-touchspin', function () {
    return view('helpers.form-touchspin');
});
Route::get('/form-validations', function () {
    return view('helpers.form-validations');
});
Route::get('/form-wizards', function () {
    return view('helpers.form-wizards');
});
Route::get('/form-xeditable', function () {
    return view('helpers.form-xeditable');
});
Route::get('/icon-dripicons', function () {
    return view('helpers.icon-dripicons');
});
Route::get('/icon-feather', function () {
    return view('helpers.icon-feather');
});
Route::get('/icon-flag', function () {
    return view('helpers.icon-flag');
});
Route::get('/icon-font-awesome', function () {
    return view('helpers.icon-font-awesome');
});
Route::get('/icon-ionicons', function () {
    return view('helpers.icon-ionicons');
});
Route::get('/icon-line-awesome', function () {
    return view('helpers.icon-line-awesome');
});
Route::get('/icon-material-design', function () {
    return view('helpers.icon-material-design');
});
Route::get('/icon-simple-line', function () {
    return view('helpers.icon-simple-line');
});
Route::get('/icon-socicon', function () {
    return view('helpers.icon-socicon');
});
Route::get('/icon-themify', function () {
    return view('helpers.icon-themify');
});
Route::get('/icon-svg', function () {
    return view('helpers.icon-svg');
});
Route::get('/icon-typicons', function () {
    return view('helpers.icon-typicons');
});
Route::get('/map-google', function () {
    return view('helpers.map-google');
});
Route::get('/map-vector', function () {
    return view('helpers.map-vector');
});
Route::get('/page-blog', function () {
    return view('helpers.page-blog');
});
Route::get('/page-faq', function () {
    return view('helpers.page-faq');
});
Route::get('/page-gallery', function () {
    return view('helpers.page-gallery');
});
Route::get('/page-invoice', function () {
    return view('helpers.page-invoice');
});
Route::get('/page-pricing', function () {
    return view('helpers.page-pricing');
});
Route::get('/page-starter', function () {
    return view('helpers.page-starter');
});
Route::get('/page-timeline', function () {
    return view('helpers.page-timeline');
});
Route::get('/table-bootstrap', function () {
    return view('helpers.table-bootstrap');
});
Route::get('/table-datatable', function () {
    return view('helpers.table-datatable');
});
Route::get('/table-editable', function () {
    return view('helpers.table-editable');
});
Route::get('/table-footable', function () {
    return view('helpers.table-footable');
});
Route::get('/table-rwdtable', function () {
    return view('helpers.table-rwdtable');
});
Route::get('/user-forgotpsw', function () {
    return view('helpers.user-forgotpsw');
});
Route::get('/user-lock-screen', function () {
    return view('helpers.user-lock-screen');
});
Route::get('/user-login', function () {
    return view('helpers.user-login');
});
Route::get('/user-register', function () {
    return view('helpers.user-register');
});
Route::get('/widgets', function () {
    return view('helpers.widgets');
});

Route::get('/home', 'HomeController@index')->name('home');
