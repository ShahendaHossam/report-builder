<?php

use App\Http\Livewire\AggregationFunction;
use App\Http\Livewire\DBConnections;
use App\Http\Livewire\ImportDataConnection;
use App\Http\Livewire\ImportDataExcel;
use App\Http\Livewire\Options;
use App\Http\Livewire\OutputType;
use App\Http\Livewire\QueryArray;
use App\Http\Livewire\QueryList;
use App\Http\Livewire\QueryMix;
use App\Http\Livewire\QueryPlots;
use App\Http\Livewire\QueryResultField;
use App\Http\Livewire\QueryTable;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('option', Options::class)->name('option.index');
Route::get('dbconnection', DBConnections::class)->name('dbconnection.index');
Route::get('importdataconnection/{dbconnection}', ImportDataConnection::class)->name('importdataconnection.index');
Route::get('importdataexcel', ImportDataExcel::class)->name('importdataexcel.index');
Route::get('aggregation_function/{dbconnection}/{import_data}', AggregationFunction::class)->name('aggregation_function.index');
Route::get('output_type/{dbconnection}/{import_data}/{aggregation_function}', OutputType::class)->name('output_type.index');
Route::get('query-list/{dbconnection}/{import_data}/{aggregation_function}', QueryList::class)->name('query_list.index');
Route::get('query-array/{dbconnection}/{import_data}/{aggregation_function}', QueryArray::class)->name('query_array.index');
Route::get('query-mix/{dbconnection}/{import_data}/{aggregation_function}', QueryMix::class)->name('query_mix.index');
Route::get('query-plots', QueryPlots::class)->name('query_plots.index');
Route::get('query-result_field', QueryResultField::class)->name('query_result_field.index');
Route::get('query-table/{dbconnection}/{import_data}/{aggregation_function}', QueryTable::class)->name('query_table.index');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
