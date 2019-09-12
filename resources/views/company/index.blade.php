@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($companies as $company)

    <div class="">
        <p>Name: {{ $company->name }}</p>
        {{-- <br>
        <p>Category {{ $company->category }}</p>
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
    </div>
    
    @endforeach
</div>
@endsection
