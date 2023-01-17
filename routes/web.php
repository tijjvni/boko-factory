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
    Route::get('/config', function () {
        return view('config');
    })->name('config');
});
