@extends('layouts.app')

@section('title', config('app.name') . ' | Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-4 login-container-custom rounded-2 text-white">
            <div class="text-center">
                <h2 class="fw-bold">LJ Marcenaria</h2>
                <h3 class="fw-semibold">Login</h3>
            </div>
            <div>
                <form method="POST" action="#">
                    @csrf

                    <div class="mb-1">
                        <fieldset class="border rounded-2 px-2 py-0 m-1">
                            <legend class="float-none w-auto m-0 px-2 fs-6">Email</legend>
                            <input type="email" class="field-custom @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>

                    <div class="mb-3">
                        <fieldset class="border rounded-2 px-2 py-0 m-1">
                            <legend class="float-none w-auto m-0 px-2 fs-6">Senha</legend>
                            <input type="password" class="field-custom @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <button type="submit" class="btn btn-login-custom w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/modules/login.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/modules/login.js') }}"></script>
@endpush