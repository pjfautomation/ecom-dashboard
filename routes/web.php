<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/orders', 'orders')->name('orders');
Route::view('/products', 'products')->name('products');
Route::view('/customers', 'customers')->name('customers');
Route::view('/analytics', 'analytics')->name('analytics');
Route::view('/marketing', 'marketing')->name('marketing');
Route::view('/settings', 'settings')->name('settings');
