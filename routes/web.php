<?php

use Illuminate\Support\Facades\Route;

/* Simple frontend routes (backend can convert to controllers later) */

Route::view('/', 'pages.home');
Route::view('/products', 'pages.products');
Route::get('/products/{slug}', fn($slug) => view('pages.product-details')); // slug handled by JS
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/login', 'pages.login');
Route::view('/register', 'pages.register');
Route::view('/cart', 'pages.cart');

/* Dashboards (frontend only) */
Route::view('/dashboard', 'pages.dashboard');
Route::view('/admin/dashboard', 'pages.admin-dashboard');
Route::view('/admin/products', 'pages.admin-products');
Route::view('/admin/products/create', 'pages.admin-product-create');
Route::get('/admin/products/{slug}/edit', fn($slug) => view('pages.admin-product-edit'));
