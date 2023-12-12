<?php

use App\Models\Invoice;
use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app', ['invoice' => new Invoice]);
})->name('home');

Route::get('/i/{invoice}', function (Invoice $invoice) {
    return view('app', ['invoice' => $invoice]);
})->name('invoices.show');

Route::get('/i/{invoice}/download', function (Invoice $invoice) {
    return view('download', ['invoice' => $invoice]);
})->name('invoices.start-download');

Route::get('/i/{invoice}/dl', function (Invoice $invoice) {
    return response()->streamDownload(function () use ($invoice) {
        echo Browsershot::url(route('invoices.show', $invoice))
            ->margins(0, 0, 0, 0)
            ->waitUntilNetworkIdle()
            ->pdf();
    }, "Invoice-#{$invoice->created_at}.pdf", ['Content-Type' => 'application/pdf']);
})->name('invoices.download');

