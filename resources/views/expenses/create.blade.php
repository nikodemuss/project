@extends('layouts.app')

@section('content')
<div class="content">
    <h1>Add New Expense</h1>
    <form method="POST" action="">
        @csrf

        <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Add Category') }}</label>

            <div class="col-md-6">
                <input id="category" type="text" class="form-control @error('name') is-invalid @enderror" name="category"
                    value="{{ old('category') }}" required autocomplete="name" autofocus>

                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

            <div class="col-md-6">
                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror"
                    name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="vendor" class="col-md-4 col-form-label text-md-right">{{ __('Add Vendor') }}</label>

            <div class="col-md-6">
                <input id="vendor" type="text" class="form-control @error('vendor') is-invalid @enderror" name="vendor"
                    value="{{ old('vendor') }}" required autocomplete="vendor">

                @error('vendor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Add Description (optional)') }}</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    value="{{ old('description') }}" autocomplete="description" autofocus>

                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="subtotal" class="col-md-4 col-form-label text-md-right">{{ __('Subtotal') }}</label>

            <div class="col-md-6">
                <input id="subtotal" type="number" class="form-control @error('subtotal') is-invalid @enderror" name="subtotal"
                    value="{{ old('subtotal') }}" required autocomplete="subtotal" autofocus>

                @error('subtotal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="tax" class="col-md-4 col-form-label text-md-right">{{ __('Add Tax (optional)') }}</label>

            <div class="col-md-6">
                <input id="tax" type="number" class="form-control @error('tax') is-invalid @enderror" name="tax"
                    value="{{ old('tax') }}" autocomplete="tax" autofocus>

                @error('tax')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="grandtotal" class="col-md-4 col-form-label text-md-right">{{ __('Grand Total') }}</label>

            <div class="col-md-6">
                <input id="grandtotal" type="number" class="form-control @error('grandtotal') is-invalid @enderror"
                    name="grandtotal" value="{{ old('grandtotal') }}" required autocomplete="grandtotal" autofocus>

                @error('grandtotal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Add Expense') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection