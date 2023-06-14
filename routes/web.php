<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;


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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home',\App\Http\Controllers\Main\IndexController::class)->name('main.index')->middleware('auth');

Route::group(['prefix' => 'tasks'], function(){
    Route::get('/home', \App\Http\Controllers\Task\IndexController::class)->name('task.index');
    Route::get('/home/create', \App\Http\Controllers\Task\CreateController::class)->name('task.create');
    Route::post('/home', \App\Http\Controllers\Task\StoreController::class)->name('task.store');
    Route::get('/home/{task}/edit', \App\Http\Controllers\Task\EditController::class)->name('task.edit');
    Route::get('/home/{task}', \App\Http\Controllers\Task\ShowController::class)->name('task.show');
    Route::patch('/home/{task}', \App\Http\Controllers\Task\UpdateController::class)->name('task.update');
    Route::delete('/home/{task}', \App\Http\Controllers\Task\DeleteController::class)->name('task.delete');
});

Route::group(['prefix' => 'additional_services'], function(){
    Route::get('/home', \App\Http\Controllers\AdditionalService\IndexController::class)->name('additional_service.index');
    Route::get('/home/create', \App\Http\Controllers\AdditionalService\CreateController::class)->name('additional_service.create');
    Route::post('/home', \App\Http\Controllers\AdditionalService\StoreController::class)->name('additional_service.store');
    Route::get('/home/{additional_service}/edit', \App\Http\Controllers\AdditionalService\EditController::class)->name('additional_service.edit');
    Route::get('/home/{additional_service}', \App\Http\Controllers\AdditionalService\ShowController::class)->name('additional_service.show');
    Route::patch('/home/{additional_service}', \App\Http\Controllers\AdditionalService\UpdateController::class)->name('additional_service.update');
    Route::delete('/home/{additional_service}', \App\Http\Controllers\AdditionalService\DeleteController::class)->name('additional_service.delete');
});

Route::group(['prefix' => 'managers'], function(){
    Route::get('/home', \App\Http\Controllers\Manager\IndexController::class)->name('manager.index');
    Route::get('/home/create', \App\Http\Controllers\Manager\CreateController::class)->name('manager.create');
    Route::post('/home/', \App\Http\Controllers\Manager\StoreController::class)->name('manager.store');
    Route::get('/home/{manager}/edit', \App\Http\Controllers\Manager\EditController::class)->name('manager.edit');
    Route::get('/home/{manager}', \App\Http\Controllers\Manager\ShowController::class)->name('manager.show');
    Route::patch('/home/{manager}', \App\Http\Controllers\Manager\UpdateController::class)->name('manager.update');
    Route::delete('/home/{manager}', \App\Http\Controllers\Manager\DeleteController::class)->name('manager.delete');
});

Route::group(['prefix' => 'cathalogs'], function(){
    Route::get('/home', \App\Http\Controllers\Cathalog\IndexController::class)->name('cathalog.index');
    Route::get('/home/create', \App\Http\Controllers\Cathalog\CreateController::class)->name('cathalog.create');
    Route::post('/home', \App\Http\Controllers\Cathalog\StoreController::class)->name('cathalog.store');
    Route::get('/home/{cathalog}/edit', \App\Http\Controllers\Cathalog\EditController::class)->name('cathalog.edit');
    Route::get('/home/{cathalog}', \App\Http\Controllers\Cathalog\ShowController::class)->name('cathalog.show');
    Route::patch('/home/{cathalog}', \App\Http\Controllers\Cathalog\UpdateController::class)->name('cathalog.update');
    Route::delete('/home/{cathalog}', \App\Http\Controllers\Cathalog\DeleteController::class)->name('cathalog.delete');
});

Route::group(['prefix' => 'clients'], function(){
    Route::get('/home', \App\Http\Controllers\Client\IndexController::class)->name('client.index');
    Route::get('/home/create', \App\Http\Controllers\Client\CreateController::class)->name('client.create');
    Route::post('/home', \App\Http\Controllers\Client\StoreController::class)->name('client.store');
    Route::get('/home/{client}/edit', \App\Http\Controllers\Client\EditController::class)->name('client.edit');
    Route::get('/home/{client}', \App\Http\Controllers\Client\ShowController::class)->name('client.show');
    Route::patch('/home/{client}', \App\Http\Controllers\Client\UpdateController::class)->name('client.update');
    Route::delete('/home/{client}', \App\Http\Controllers\Client\DeleteController::class)->name('client.delete');
});

Route::group(['prefix' => 'factories'], function(){
    Route::get('/home', \App\Http\Controllers\Factory\IndexController::class)->name('factory.index');
    Route::get('/home/create', \App\Http\Controllers\Factory\CreateController::class)->name('factory.create');
    Route::post('/home', \App\Http\Controllers\Factory\StoreController::class)->name('factory.store');
    Route::get('/home/{factory}/edit', \App\Http\Controllers\Factory\EditController::class)->name('factory.edit');
    Route::get('/home/{factory}', \App\Http\Controllers\Factory\ShowController::class)->name('factory.show');
    Route::patch('/home/{factory}', \App\Http\Controllers\Factory\UpdateController::class)->name('factory.update');
    Route::delete('/home/{factory}', \App\Http\Controllers\Factory\DeleteController::class)->name('factory.delete');
});

Route::group(['prefix' => 'histories'], function(){
    Route::get('/home', \App\Http\Controllers\History\IndexController::class)->name('history.index');
    Route::get('/home/create', \App\Http\Controllers\History\CreateController::class)->name('history.create');
    Route::post('/home', \App\Http\Controllers\History\StoreController::class)->name('history.store');
    Route::get('/home/{history}/edit', \App\Http\Controllers\History\EditController::class)->name('history.edit');
    Route::get('/home/{history}', \App\Http\Controllers\History\ShowController::class)->name('history.show');
    Route::patch('/home/{history}', \App\Http\Controllers\History\UpdateController::class)->name('history.update');
    Route::delete('/home/{history}', \App\Http\Controllers\History\DeleteController::class)->name('history.delete');
});

