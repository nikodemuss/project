@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show </h1>
    <div class="">
        <div>
            <p>Name: {{ $company->name }}</p>
        </div>

        <br>
        <p>Category: {{ $company->category }}</p>
        <br>
        <p>Phone: {{ $company->phone }}</p>
        <br>
        <p>Street: {{ $company->street }}</p>
        <br>
        <p>City: {{ $company->city }}</p>
        <br>
        <p>State: {{ $company->state }}</p>
        <br>
        <p>Zip Code: {{ $company->zipCode }}</p>
        <br>
        <p>Country: {{ $company->country }}</p>
        <br>
        <p>Currency: {{ $company->currency }}</p> 
    </div>

    <a href="/company/{{ $company->id }}/edit">edit</a>
    <form method="POST" action="/company/{{ $company->id }}">
        @csrf
        @method('DELETE')

        <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $company->id }}" required autocomplete="id" autofocus>

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