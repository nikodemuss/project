@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show </h1>
    <div class="">
        <p>Category: {{ $expense->category }}</p>
        <br>
        <p>Phone: {{ $expense->currency }}</p>
        <br>
        <p>Street: {{ $expense->vendor }}</p>
        <br>
        <p>City: {{ $expense->date }}</p>
        <br>
        <p>State: {{ $expense->description }}</p>
        <br>
        <p>Zip Code: {{ $expense->subtotal }}</p>
        <br>
        <p>Country: {{ $expense->tax }}</p>
        <br>
        <p>Currency: {{ $expense->grand_total }}</p> 
    </div>

    <a href="/expenses/{{ $expense->id }}/edit">edit</a>
    <form method="POST" action="/company/{{ $expense->id }}">
        @csrf
        @method('DELETE')

        <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $expense->id }}" required autocomplete="id" autofocus>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Delete') }}
                </button>
            </div>
        </div>
    </form>

</div>
@endsection