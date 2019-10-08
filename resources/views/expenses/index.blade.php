@extends('layouts.app')

@section('content')
<div class="container">
    <p>Expenses</p>

    <div class="row">
        <p class="col-md-3">Expenses Date</p>
        <p class="col-md-3">Type</p>
        <p class="col-md-3">Vendor</p>
        <p class="col-md-3">Grand Total</p>
    </div>

    @foreach ($expenses as $expense)

    <a href="/expenses/{{ $expense->id}}">
        <div class="card mb-4">
            <div class="card-body">
                <a href="/expenses/{{ $expense->id}}" class="row">
                <h4 class="card-title col-md-3">{{ $expense->date }}</h4>
                <p class="card-text col-md-3">{{ $expense->category }}</p>
                <p class="card-text col-md-3">{{ $expense->vendor }}</p>
                <p class="card-text col-md-3">{{ $expense->grand_total }}</p>
                </a>
            </div>
        </div>
    </a>

    
    @endforeach

</div>
@endsection