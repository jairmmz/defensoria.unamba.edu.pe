<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Backend
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard');

Route::get('/calendar', function () {
    return view('backend.pages.apps.calendar');
})->name('calendar');

Route::get('/email', function () {
    return view('backend.pages.apps.email');
})->name('email');

Route::get('/gallery', function () {
    return view('backend.pages.apps.gallery');
})->name('gallery');

Route::get('/todo', function () {
    return view('backend.pages.apps.todo');
})->name('todo');

Route::get('/c3', function () {
    return view('backend.pages.charts.c3');
})->name('c3');

Route::get('/chartist', function () {
    return view('backend.pages.charts.chartist');
})->name('chartist');

Route::get('/chartjs', function () {
    return view('backend.pages.charts.chartjs');
})->name('chartjs');

Route::get('/flot-chart', function () {
    return view('backend.pages.charts.flot-chart');
})->name('flot-chart');

Route::get('/google-charts', function () {
    return view('backend.pages.charts.google-charts');
})->name('google-charts');

Route::get('/justgage', function () {
    return view('backend.pages.charts.justGage');
})->name('justgage');

Route::get('/morris', function () {
    return view('backend.pages.charts.morris');
})->name('morris');

Route::get('/sparkline', function () {
    return view('backend.pages.charts.sparkline');
})->name('sparkline');

Route::get('/advanced_elements', function () {
    return view('backend.pages.forms.advanced_elements');
})->name('advanced_elements');

Route::get('/basic_elements', function () {
    return view('backend.pages.forms.basic_elements');
})->name('basic_elements');

Route::get('/code_editor', function () {
    return view('backend.pages.forms.code_editor');
})->name('code_editor');

Route::get('/dropify', function () {
    return view('backend.pages.forms.dropify');
})->name('dropify');

Route::get('/text_editor', function () {
    return view('backend.pages.forms.text_editor');
})->name('text_editor');

Route::get('/validation', function () {
    return view('backend.pages.forms.validation');
})->name('validation');

Route::get('/wizard', function () {
    return view('backend.pages.forms.wizard');
})->name('wizard');

Route::get('/flag-icons', function () {
    return view('backend.pages.icons.flag-icons');
})->name('flag-icons');

Route::get('/font-awesome', function () {
    return view('backend.pages.icons.font-awesome');
})->name('font-awesome');

Route::get('/simple-line-icon', function () {
    return view('backend.pages.icons.simple-line-icon');
})->name('simple-line-icon');

Route::get('/themify', function () {
    return view('backend.pages.icons.themify');
})->name('themify');

Route::get('/boxed-layout', function () {
    return view('backend.pages.layout.boxed-layout');
})->name('boxed-layout');

Route::get('/compact-menu', function () {
    return view('backend.pages.layout.compact-menu');
})->name('compact-menu');

Route::get('/horizontal-menu', function () {
    return view('backend.pages.layout.horizontal-menu');
})->name('horizontal-menu');

Route::get('/rtl-layout', function () {
    return view('backend.pages.layout.rtl-layout');
})->name('rtl-layout');

Route::get('/sidebar-collapsed', function () {
    return view('backend.pages.layout.sidebar-collapsed');
})->name('sidebar-collapsed');

Route::get('/sidebar-fixed', function () {
    return view('backend.pages.layout.sidebar-fixed');
})->name('sidebar-fixed');

Route::get('/sidebar-hidden-overlay', function () {
    return view('backend.pages.layout.sidebar-hidden-overlay');
})->name('sidebar-hidden-overlay');

Route::get('/sidebar-hidden', function () {
    return view('backend.pages.layout.sidebar-hidden');
})->name('sidebar-hidden');

Route::get('/google-maps', function () {
    return view('backend.pages.maps.google-maps');
})->name('google-maps');

Route::get('/mapeal', function () {
    return view('backend.pages.maps.mapeal');
})->name('mapeal');
Route::get('/vector-map', function () {
    return view('backend.pages.maps.vector-map');
})->name('vector-map');

Route::get('/blank-page', function () {
    return view('backend.pages.samples.blank-page');
})->name('blank-page');

Route::get('/error-404', function () {
    return view('backend.pages.samples.error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('backend.pages.samples.error-500');
})->name('error-500');

Route::get('/faq-2', function () {
    return view('backend.pages.samples.faq-2');
})->name('faq-2');

Route::get('/faq', function () {
    return view('backend.pages.samples.faq');
})->name('faq');

Route::get('/invoice', function () {
    return view('backend.pages.samples.invoice');
})->name('invoice');

Route::get('/lock-screen', function () {
    return view('backend.pages.samples.lock-screen');
})->name('lock-screen');

Route::get('/login', function () {
    return view('backend.pages.samples.login');
})->name('login');

Route::get('/news-grid', function () {
    return view('backend.pages.samples.news-grid');
})->name('news-grid');

Route::get('/orders', function () {
    return view('backend.pages.samples.orders');
})->name('orders');

Route::get('/portfolio', function () {
    return view('backend.pages.samples.portfolio');
})->name('portfolio');

Route::get('/pricing-table', function () {
    return view('backend.pages.samples.pricing-table');
})->name('pricing-table');

Route::get('/profile', function () {
    return view('backend.pages.samples.profile');
})->name('profile');

Route::get('/register-2', function () {
    return view('backend.pages.samples.register-2');
})->name('register-2');

Route::get('/register', function () {
    return view('backend.pages.samples.register');
})->name('register');

Route::get('/search-results', function () {
    return view('backend.pages.samples.search-results');
})->name('search-results');

Route::get('/timeline', function () {
    return view('backend.pages.samples.timeline');
})->name('timeline');

Route::get('/basic-table', function () {
    return view('backend.pages.tables.basic-table');
})->name('basic-table');

Route::get('/data-table', function () {
    return view('backend.pages.tables.data-table');
})->name('data-table');

Route::get('/js-grid', function () {
    return view('backend.pages.tables.js-grid');
})->name('js-grid');

Route::get('/sortable-table', function () {
    return view('backend.pages.tables.sortable-table');
})->name('sortable-table');

Route::get('/accordions', function () {
    return view('backend.pages.ui-features.accordions');
})->name('accordions');

Route::get('/badges', function () {
    return view('backend.pages.ui-features.badges');
})->name('badges');

Route::get('/breadcrumbs', function () {
    return view('backend.pages.ui-features.breadcrumbs');
})->name('breadcrumbs');

Route::get('/buttons', function () {
    return view('backend.pages.ui-features.buttons');
})->name('buttons');

Route::get('/carousel', function () {
    return view('backend.pages.ui-features.carousel');
})->name('carousel');

Route::get('/clipboard', function () {
    return view('backend.pages.ui-features.clipboard');
})->name('clipboard');

Route::get('/colcade', function () {
    return view('backend.pages.ui-features.colcade');
})->name('colcade');

Route::get('/context-menu', function () {
    return view('backend.pages.ui-features.context-menu');
})->name('context-menu');

Route::get('/dragula', function () {
    return view('backend.pages.ui-features.dragula');
})->name('dragula');

Route::get('/dropdowns', function () {
    return view('backend.pages.ui-features.dropdowns');
})->name('dropdowns');

Route::get('/loaders', function () {
    return view('backend.pages.ui-features.loaders');
})->name('loaders');

Route::get('/modals', function () {
    return view('backend.pages.ui-features.modals');
})->name('modals');

Route::get('/notifications', function () {
    return view('backend.pages.ui-features.notifications');
})->name('notifications');

Route::get('/pagination', function () {
    return view('backend.pages.ui-features.pagination');
})->name('pagination');

Route::get('/popups', function () {
    return view('backend.pages.ui-features.popups');
})->name('popups');

Route::get('/progress', function () {
    return view('backend.pages.ui-features.progress');
})->name('progress');

Route::get('/slider', function () {
    return view('backend.pages.ui-features.slider');
})->name('slider');

Route::get('/tabs', function () {
    return view('backend.pages.ui-features.tabs');
})->name('tabs');

Route::get('/tooltips', function () {
    return view('backend.pages.ui-features.tooltips');
})->name('tooltips');

Route::get('/typography', function () {
    return view('backend.pages.ui-features.typography');
})->name('typography');

Route::get('/widgets', function () {
    return view('backend.pages.widgets');
})->name('widgets');

Route::get('/documentation', function () {
    return view('backend.pages.documentation');
})->name('documentation');



/*
|--------------------------------------------------------------------------
| Web Routes Frontend
|--------------------------------------------------------------------------
*/
