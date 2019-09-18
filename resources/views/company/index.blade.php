@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="/search">
        @csrf

        <div class="form-group row">
            <label for="search" class="col-md-4 col-form-label text-md-right">{{ __('Search') }}</label>

            <div class="col-md-6">
                <input id="search" type="text" class="form-control @error('search') is-invalid @enderror" name="search"
                    value="" required autocomplete="search" autofocus>

                @error('search')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Search') }}
                </button>
            </div>
        </div>
    </form>

    @foreach ($companies as $company)

    <a href="/company/{{ $company->id}}">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">{{ $company->name }}</h4>
                <p class="card-text">{{ $company->category }}</p>
                <p class="card-text">{{ $company->country }}</p>
                <a href="{{ $company->url }}" class="card-link">{{ $company->url }}</a>
            </div>
        </div>
    </a>

    {{-- <br>
    <p>Category </p>
    <br>
    <p>Phone {{ $company->phone }}</p>
    <br>
    <p>Street {{ $company->street }}</p>
    <br>
    <p>City {{ $company->city }}</p>
    <br>
    <p>State {{ $company->state }}</p>
    <br>
    <p>Zip Code {{ $company->zipCode }}</p>
    <br>
    <p>Country {{ $company->country }}</p>
    <br>
    <p>Currency {{ $company->currency }}</p> --}}

    @endforeach
</div>
@endsection