<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

/*Route::get('/', function () {
    return view('dashboard');
});*/

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard');

/**Recettes */

Route::get('/searchReceipt', 'ReceiptController@searchReceipt')->name('searchReceipt');

Route::post('/searchReceipt', 'ReceiptController@postReceipt')->name('searchReceipt');

Route::get('/resultsReceipt', 'ReceiptController@getReceipt')->name('resultsReceipt');

Route::get('/searchLeftpay', 'ReceiptController@searchLeftpay')->name('searchLeftpay');

Route::get('/resultsLeftpay', 'ReceiptController@getLeftpay')->name('resultsLeftpay');

Route::post('/searchLeftpay', 'ReceiptController@postLeftpay')->name('searchLeftpay');

Route::get('/receipeNewToDay', 'ReceiptController@receipeNewToDay')->name('receipeNewToDay');

Route::get('/receipeAllToDay', 'ReceiptController@receipeAllToDay')->name('receipeAllToDay');
/**Statistiques */

Route::get('/range', 'StatsController@range')->name('range');

Route::post('/sendData', 'StatsController@sendData')->name('sendData');

Route::get('/checkcustomer', 'DashboardController@getCustomer')->name('checkcustomer');

Route::get('/search', 'StatsController@index')->name('search');

Route::get('/results', 'StatsController@getSearch')->name('getSearch');

Route::get('/totake', 'StatsController@totake')->name('totake');

Route::get('/answers', 'StatsController@getTotake')->name('getTotake');

Route::post('/totake', 'StatsController@postTotake')->name('totake');

Route::get('/customer_search/action', 'DashboardController@action')->name('customer_search.action');

Route::post('/search', 'StatsController@postSearch')->name('search');

Route::get('/getCustomerDeposit', 'StatsController@getCustomerDeposit')->name('getCustomerDeposit');

Route::post('/postCustomerDeposit', 'StatsController@postCustomerDeposit')->name('searchdeposit');

Route::get('/getCustomer', 'StatsController@search')->name('getCustomer');

Route::get('/getsaleDay', 'StatsController@getSaleDay')->name('saleDay');

Route::get('/findPrice', ['as' => 'findPrice', 'uses' => 'DepositController@findPrice']);

Route::get('user/{id}/articledeposit', ['as' => 'depositedarticle.create', 'uses' => 'DepositedarticleController@add']);

Route::get('user/{id}/orders', ['as' => 'depositedarticle.index', 'uses' => 'DepositedarticleController@getDepositedarticles']);

Route::get('user/{id}/depositvalidate', ['as' => 'deposit.create', 'uses' => 'DepositController@doDeposit']);

Route::get('customer/{id}/depositInvoice', ['as' => 'deposit.invoice', 'uses' => 'DepositController@pdfexport']);

Route::get('customer/{id}/depositdelivery', ['as' => 'delivery.create', 'uses' => 'DeliveryController@add']);

Route::get('customer/{id}/deliveryInvoice', ['as' => 'delivery.invoice', 'uses' => 'DeliveryController@generatePDF']);

Route::post('/updatepassword', 'ProfilController@updatePassword')->name('updatepassword');

Route::get('/setting', 'ProfilController@setting')->name('setting');

Route::get('/mydeposits', 'CustomerManagerController@mydeposits')->name('mydeposits');

Route::get('/mydeliveries', 'CustomerManagerController@mydeliveries')->name('mydeliveries');

Route::post('/postDateLivraison', 'DepositController@postDateLivraison')->name('postdatelivraison');

Route::resource('licences', 'LicenceController');

Route::resource('status', 'StatusController');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('profils', 'ProfilController');

Route::resource('customers', 'ClientController');

Route::resource('articles', 'ArticleController');

Route::resource('codesuffixes', 'CodesuffixController');

Route::resource('codesuffixes', 'CodesuffixController');

Route::resource('deliveryhours', 'DeliveryHourController');

Route::resource('deposits', 'DepositController');

Route::resource('deliveries', 'DeliveryController');

/*Route::get('/create_role_permission', function () {
    $role = Role::create(['name' => 'Administrer']);
    $permission = Permission::create(['name' => 'Roles Administration & Permission']);
    auth()->user()->assignRole('Administrer');
    auth()->user()->givePermissionTo('Roles Administration & Permission');
});*/
