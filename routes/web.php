<?php

use Illuminate\Support\Facades\Route;

use App\Models\Production;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/sales', function () {
        return view('sales');
    })->name('sales');
    Route::get('/sales/orders', function () {
        return view('sales');
    })->name('sales.orders');
    Route::get('/sales/orders/{order}', function () {
        return view('sales');
    })->name('sales.orders.show');

    Route::prefix('/production')->group(function(){
        Route::get('/',function(){
            return view('production');
        })->name('production');
        Route::get('/add', function () {
            return view('production');
        })->name('production.add');
        Route::get('/show/{production}', function () {
            $production = Production::find(request()->route('production'));

            if(!$production){
                session()->flash('flash.banner', 'Invalid production ID');
                session()->flash('flash.bannerStyle', 'danger');
                return redirect()->to(route('production'));
            }

            return view('production');
        })->where('production', '[0-9]+')->name('production.show');

    });

    Route::get('/store', function () {
        return view('store');
    })->name('store');
    
    Route::prefix('/config')->group(function(){
        Route::get('/', function () {
            return view('config');
        })->name('config');

        Route::get('/config-users-suplliers', function () {
            return view('config');
        })->name('config.users.suppliers');
        Route::get('/config-users-add-suppliers', function () {
            return view('config');
        })->name('config.users.add.suppliers');
        Route::get('/config-users-customers', function () {
            return view('config');
        })->name('config.users.customers');
        Route::get('/config-users-add-customers', function () {
            return view('config');
        })->name('config.users.add.customers');

        Route::get('/config-production-products', function () {
            return view('config');
        })->name('config.production.products');
        Route::get('/config-production-products-categories', function () {
            return view('config');
        })->name('config.production.products.categories');
        Route::get('/config-production-materials', function () {
            return view('config');
        })->name('config.production.materials');
        Route::get('/config-production-material-types', function () {
            return view('config');
        })->name('config.production.materials.types');



    });
});
