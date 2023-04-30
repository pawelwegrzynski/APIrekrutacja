<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrencyRate;

class CurrencyRateController extends Controller
{
    public function create()
    {
        return view('add-currency');
    }

    public function store(Request $request)
    {
        $currencyRate = new CurrencyRate;
        $currencyRate->currency = $request->currency;
        $currencyRate->amount = $request->amount;
        $currencyRate->date = now();  // dodaj tę linię
        $currencyRate->save();

        return redirect()->route('currency.index');
    }

    public function index()
    {
        $currencyRates = CurrencyRate::all();

        return view('currency-rates', ['currencyRates' => $currencyRates]);
    }
}
