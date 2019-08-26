@extends('layouts.app')

@section('content')
<div class="content">
    <h1>Add New Client</h1>
    <form method="POST" action="">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                    name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

            <div class="col-md-6">
                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street"
                    value="{{ old('street') }}" required autocomplete="street" autofocus>

                @error('street')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                    value="{{ old('city') }}" required autocomplete="city" autofocus>

                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

            <div class="col-md-6">
                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state"
                    value="{{ old('state') }}" required autocomplete="state" autofocus>

                @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="zipCode" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>

            <div class="col-md-6">
                <input id="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror"
                    name="zipCode" value="{{ old('zipCode') }}" required autocomplete="zipCode" autofocus>

                @error('zipCode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror"
                    name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Add Client') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection