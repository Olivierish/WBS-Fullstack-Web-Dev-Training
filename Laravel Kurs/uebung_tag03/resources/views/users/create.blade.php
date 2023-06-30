@extends('layouts.app')
@section('title','Add a new user - OI Design')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-light border-secondary border-opacity-25">
                <div class="card-header text-warning">{{ __('Register') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                    <form method="POST" action="/users">
                        @csrf

                        <div class="form-group row py-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-dark text-light border-secondary" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-dark text-light border-secondary" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-dark text-light border-secondary" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control bg-dark text-light border-secondary" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="motto" class="col-md-4 col-form-label text-md-right">{{ __('Motto') }}</label>

                            <div class="col-md-6">
                                <input id="motto" type="text" class="form-control @error('motto') is-invalid @enderror bg-dark text-light border-secondary" name="motto" value="{{ old('motto') }}" autocomplete="motto" autofocus>

                                @error('motto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="ueberMich" class="col-md-4 col-form-label text-md-right">{{ __('Über mich') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="ueberMich" type="text" class="form-control @error('ueberMich') is-invalid @enderror bg-dark text-light border-secondary" name="ueberMich" value="{{ old('ueberMich') }}" autocomplete="ueberMich" autofocus> -->
                                <textarea name="ueberMich" id="ueberMich" class="form-control @error('ueberMich') is-invalid @enderror bg-dark text-light border-secondary" autocomplete="ueberMich" autofocus>{{ old('ueberMich') }}</textarea>    
                                @error('ueberMich')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-warning mt-5" href="/users" >Zurück</a>
        </div>
    </div>
</div>
@endsection
