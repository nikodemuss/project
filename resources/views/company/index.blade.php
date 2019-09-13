@extends('layouts.app')

@section('content')
<div class="container">
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