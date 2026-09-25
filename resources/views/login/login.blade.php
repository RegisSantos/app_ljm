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
                            <legend class="float-none w-auto m-0 px-1 fs-6">Email</legend>
                            <input type="email" id="iUser" name="iUser" class="field-custom @error('email') is-invalid @enderror" placeholder="código ou email" maxlength="50" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>

                    <div class="mb-3">
                        <fieldset class="border rounded-2 px-2 py-0 m-1">
                            <legend class="float-none w-auto m-0 px-1 fs-6">Senha</legend>
                            <div class="input-group d-flex align-items-center">
                                <input type="password" id="iPass" name="iPass" class="field-custom w-92-c @error('password') is-invalid @enderror" placeholder="sua senha" maxlength="50" required>
                                <i id="togglePassword" class="bi bi-eye-slash c-pointer mb-1"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>

                    <div class="mx-1">
                        <button type="submit" class="btn btn-login-custom w-100">Entrar</button>
                    </div>
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