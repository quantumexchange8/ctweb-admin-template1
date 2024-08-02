<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.eCommerce');
});


// ---------- dashboard ------------

Route::get('/e-Commerce', function () {
    return view('dashboard.eCommerce');
});

Route::get('/dashboard_Cryptocurrency', function () {
    return view('dashboard.dashboard_Cryptocurrency');
});



// ---------- widgets ------------

Route::get('/widgets', function () {
    return view('widgets.widgets');
});


// ---------- basicElements ------------

Route::get('/alerts', function () {
    return view('basicElements.alerts');
});

Route::get('/accordions', function () {
    return view('basicElements.accordions');
});

Route::get('/avatar', function () {
    return view('basicElements.avatar');
});

Route::get('/badge', function () {
    return view('basicElements.badge');
});

Route::get('/buttons', function () {
    return view('basicElements.buttons');
});

Route::get('/carousel', function () {
    return view('basicElements.carousel');
});

Route::get('/dropdown', function () {
    return view('basicElements.dropdown');
});

Route::get('/listGroup', function () {
    return view('basicElements.listGroup');
});

Route::get('/media', function () {
    return view('basicElements.media');
});

Route::get('/modal', function () {
    return view('basicElements.modal');
});

Route::get('/pagination', function () {
    return view('basicElements.pagination');
});

Route::get('/progressBar', function () {
    return view('basicElements.progressBar');
});

Route::get('/spinners', function () {
    return view('basicElements.spinners');
});

Route::get('/tabs', function () {
    return view('basicElements.tabs');
});

Route::get('/toolTips', function () {
    return view('basicElements.toolTips');
});

Route::get('/typoGraphy', function () {
    return view('basicElements.typoGraphy');
});


// ---------- advanceElements ------------ hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

Route::get('/clipBoard', function () {
    return view('advanceElements.clipBoard');
});

Route::get('/fullCalendar', function () {
    return view('advanceElements.fullCalendar');
});

Route::get('/mediaPlayer', function () {
    return view('advanceElements.mediaPlayer');
});

Route::get('/sortable', function () {
    return view('advanceElements.sortable');
});

Route::get('/toast', function () {
    return view('advanceElements.toast');
});

Route::get('/rating', function () {
    return view('advanceElements.rating');
});

Route::get('/sweetAlert', function () {
    return view('advanceElements.sweetAlert');
});


// ---------- icons ------------

Route::get('/icons_Cryptocurrency', function () {
    return view('icons.icons_Cryptocurrency');
});

Route::get('/fontAwesome', function () {
    return view('icons.fontAwesome');
});

Route::get('/material_Icon', function () {
    return view('icons.material_Icon');
});

Route::get('/themify_Icon', function () {
    return view('icons.themify_Icon');
});


// ---------- forms ------------

Route::get('/basic_Elements', function () {
    return view('forms.basic_Elements');
});

Route::get('/checkbox', function () {
    return view('forms.checkbox');
});

Route::get('/date_N_Mask', function () {
    return view('forms.date_N_Mask');
});

Route::get('/editor', function () {
    return view('forms.editor');
});

Route::get('/file_Upload', function () {
    return view('forms.file_Upload');
});

Route::get('/layout', function () {
    return view('forms.layout');
});

Route::get('/radio', function () {
    return view('forms.radio');
});

Route::get('/range_Slider', function () {
    return view('forms.range_Slider');
});

Route::get('/selects', function () {
    return view('forms.selects');
});

Route::get('/switchers', function () {
    return view('forms.switchers');
});

Route::get('/wizard', function () {
    return view('forms.wizard');
});


// ---------- table ------------

Route::get('/basic', function () {
    return view('table.basic');
});

Route::get('/dataTable', function () {
    return view('table.dataTable');
});

Route::get('/footable', function () {
    return view('table.footable');
});

Route::get('/jsGrid', function () {
    return view('table.jsGrid');
});


// ---------- charts ------------

Route::get('/chartJS', function () {
    return view('charts.chartJS');
});

Route::get('/eCharts', function () {
    return view('charts.eCharts');
});

Route::get('/google_Chart', function () {
    return view('charts.google_Chart');
});

Route::get('/morris_Chart', function () {
    return view('charts.morris_Chart');
});

Route::get('/sparkLine_Chart', function () {
    return view('charts.sparkLine_Chart');
});


// ---------- maps ------------

Route::get('/vector_Maps', function () {
    return view('maps.vector_Maps');
});

Route::get('/google_Maps', function () {
    return view('maps.google_Maps');
});



// ---------- e-Commerce ------------

Route::get('/add_Products', function () {
    return view('e-Commerce.add_Products');
});

Route::get('/edit_Products', function () {
    return view('e-Commerce.edit_Products');
});

Route::get('/invoice_List', function () {
    return view('e-Commerce.invoice_List');
});

Route::get('/invoice_Details', function () {
    return view('e-Commerce.invoice_Details');
});

Route::get('/order_List', function () {
    return view('e-Commerce.order_List');
});

Route::get('/order_Details', function () {
    return view('e-Commerce.order_Details');
});

Route::get('/manage_Prodcuts', function () {
    return view('e-Commerce.manage_Prodcuts');
});


// ---------- apps ------------

Route::get('/chat', function () {
    return view('apps.chat');
});

Route::get('/mail', function () {
    return view('apps.mail');
});

Route::get('/single_Mail', function () {
    return view('apps.single_Mail');
});

Route::get('/todo_List', function () {
    return view('apps.todo_List');
});


// ---------- authentication ------------

Route::get('/login', function () {
    return view('authentication.login');
});

Route::get('/register', function () {
    return view('authentication.register');
});

Route::get('/profile', function () {
    return view('authentication.profile');
});


// ---------- pages ------------

Route::get('/blank', function () {
    return view('pages.blank');
});

Route::get('/timeline', function () {
    return view('pages.timeline');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/error_1', function () {
    return view('pages.error_1');
});

Route::get('/error_2', function () {
    return view('pages.error_2');
});