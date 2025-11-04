@extends('layouts.app')

@section('title', 'Login - Forum UMKM Tel-U')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-custom shadow-sm border-0">
            <div class="card-header text-center fw-bold bg-primary text-white rounded-top">
                Masuk ke Forum UMKM
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="contoh@email.com" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold">Masuk</button>
                </form>

                <p class="text-center mt-3">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-primary fw-semibold">Daftar</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
