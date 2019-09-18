@extends('layouts.app')

@section('content')
<div class="content">
    <h1>Edit New Company</h1>
    <form method="POST" action="/company/{{ $company->id }}">
        @csrf
        @method('PATCH')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ $company->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Company Category') }}</label>

            <div class="col-md-6">
                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    value="{{ $company->category }}" required autocomplete="category" autofocus>

                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Add Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="number" class="form-control @error('name') is-invalid @enderror" name="phone"
                    value="{{ $company->phone }}" required autocomplete="name" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Add street') }}</label>

            <div class="col-md-6">
                <input id="street" type="text" class="form-control @error('name') is-invalid @enderror" name="street"
                    value="{{ $company->street }}" required autocomplete="name" autofocus>

                @error('street')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Company city') }}</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                    value="{{ $company->city }}" required autocomplete="city">

                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Add state') }}</label>

            <div class="col-md-6">
                <input id="state" type="text" class="form-control @error('name') is-invalid @enderror" name="state"
                    value="{{ $company->state }}" required autocomplete="name" autofocus>

                @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="zipCode" class="col-md-4 col-form-label text-md-right">{{ __('Add zipCode') }}</label>

            <div class="col-md-6">
                <input id="zipCode" type="text" class="form-control @error('name') is-invalid @enderror" name="zipCode"
                    value="{{ $company->zipCode }}" required autocomplete="name" autofocus>

                @error('zipCode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Add Country') }}</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control @error('name') is-invalid @enderror" name="country"
                    value="{{ $company->country }}" required autocomplete="name" autofocus>

                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="currency" class="col-md-4 col-form-label text-md-right">{{ __('Add currency') }}</label>

            <div class="col-md-6">
                <input id="currency" type="text" class="form-control @error('name') is-invalid @enderror" name="currency"
                    value="{{ $company->currency }}" required autocomplete="name" autofocus>

                @error('currency')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Edit Company') }}
                </button>
            </div>
        </div>
     
    </form>
</div>
@endsection