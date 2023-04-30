@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kursy walut</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Waluta</th>
                <th>Kurs</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($currencyRates as $rate)
                <tr>
                    <td>{{ $rate->currency }}</td>
                    <td>{{ $rate->amount }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
