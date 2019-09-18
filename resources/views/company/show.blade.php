@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show </h1>
    <div class="">
        <div>
            <p>Name: {{ $company[0]->name }}</p>
        </div>

        <br>
        <p>Category: {{ $company[0]->category }}</p>
        <br>
        <p>Phone: {{ $company[0]->phone }}</p>
        <br>
        <p>Street: {{ $company[0]->street }}</p>
        <br>
        <p>City: {{ $company[0]->city }}</p>
        <br>
        <p>State: {{ $company[0]->state }}</p>
        <br>
        <p>Zip Code: {{ $company[0]->zipCode }}</p>
        <br>
        <p>Country: {{ $company[0]->country }}</p>
        <br>
        <p>Currency: {{ $company[0]->currency }}</p>
    </div>

    <a href="/company/{{ $company[0]->id }}/edit">edit</a>
</div>
@endsection