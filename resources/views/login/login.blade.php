@extends('layouts.app')

@section('title', config('app.name') . ' | Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-4 shadow-custom rounded-2 text-white">
            <div class="text-center">
                <h2 class="fw-bold">LJ Marcenaria</h2>
                <h3 class="fw-semibold">Login</h3>
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