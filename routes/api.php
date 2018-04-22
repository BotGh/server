<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
 Tables Routes
*/
Route::get('/resTables/{id}', 'TablesController@resTables');
Route::get('/tableInfo/{id}', 'TablesController@tableInfo');
Route::get('/reservedTables/{id}', 'TablesController@reservedTables');
Route::get('/unreservedTables/{id}', 'TablesController@unreservedTables');
/*
 * Menu Routes
 */
Route::get('/menuNumber/{id}', 'MenuController@menuDishes');
Route::get('/dish/{id}', 'DishesController@index');
Route::get('/resMenus/{id}', 'MenuController@Menus');
/*
 * Restaurant Routes
 */
Route::get('/ResNames', 'RestaurantsController@resNames');
Route::get('/resStatus/{id}', 'ResWorkingHoursController@index');
Route::get('/AboutRestaurant/{id}', 'RestaurantsController@About');
/*
 * Orders Routes
 */
Route::get('/allOrders', 'OrdersController@showAllOrders');
Route::get('/byUser/{id}', 'OrdersController@showByUser');
Route::get('/byTable/{id}', 'OrdersController@showByTable');
Route::get('/cancelOrder/{id}', 'OrdersController@cancel');
Route::get('/deleteOrder/{id}', 'OrdersController@destroy');
