<?php



use App\Http\Controllers\BkashPaymentController;
use App\Http\Controllers\BkashRefundController;
use Illuminate\Support\Facades\Route;



// Payment Routes for bKash
Route::controller(BkashPaymentController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/get-token', 'getToken')->name('bkash.get.token');
        Route::get('/make-payment', 'createPayment')->name('bkash.make.payment');
        Route::post('/execute-payment', 'executePayment')->name('bkash.execute.payment');
        Route::get('/query-payment', 'queryPayment')->name('bkash.query.payment');
        Route::post('/success', 'bkashSuccess')->name('bkash.success');
    });

// Refund Routes for bKash
Route::controller(BkashRefundController::class)->group(function () {
    Route::post('/refund', 'refund');
});
