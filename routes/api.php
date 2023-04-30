<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyRateController;

Route::middleware('auth:api')->group(function () {
Route::post('currency-rates', [CurrencyRateController::class, 'store']);
Route::get('currency-rates/{date}', [CurrencyRateController::class, 'listByDate']);
Route::get('currency-rates/{currency}/{date}', [CurrencyRateController::class, 'getByCurrencyAndDate']);
});
?>
