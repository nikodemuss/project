@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <p class="col-md-3">Company Name</p>
        <p class="col-md-3">Category</p>
        <p class="col-md-3">City</p>
        <p class="col-md-3">Country</p>
    </div>
    @foreach ($companies as $company)

    <a href="/company/{{ $company->id}}">
        <div class="card mb-4">
            <div class="card-body">
                <a href="/company/{{ $company->id}}" class="row">
                <h4 class="card-title col-md-3">{{ $company->name }}</h4>
                <p class="card-text col-md-3">{{ $company->category }}</p>
                <p class="card-text col-md-3">{{ $company->city }}</p>
                <p class="card-text col-md-3">{{ $company->country }}</p>
                <!-- <a href="{{ $company->url }}" class="card-link">{{ $company->url }}</a> -->
                </a>
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