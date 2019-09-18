@extends('layouts.app')

@section('content')
<div class="content">
<div class="form-group row">
<form method="POST" action="/company/{{ $company->id }}">

            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Search') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="search" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
</div>
@endsection
