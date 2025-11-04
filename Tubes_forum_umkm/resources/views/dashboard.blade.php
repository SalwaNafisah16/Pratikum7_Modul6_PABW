@extends('layouts.app')

@section('title', 'Dashboard - Forum UMKM Tel-U')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <!-- Greeting Banner -->
        <div class="p-4 mb-4 rounded-4 text-white" style="background: linear-gradient(to right, #0d6efd, #6c63ff);">
            <h3 class="fw-bold">Selamat Datang, {{ Auth::user()->name }}! 🎉</h3>
            <p class="mb-0">Terima kasih sudah menggunakan Forum UMKM Tel-U, tempat berbagi info dan promosi produk UMKM kampus.</p>
        </div>

        <!-- Main Dashboard Card -->
        <div class="card card-custom shadow-sm border-0">
            <div class="card-header bg-primary text-white fw-bold rounded-top">
                Dashboard
            </div>
            <div class="card-body p-4">
                <h5 class="fw-semibold">Status Login</h5>
                <p>Kamu berhasil login sebagai <span class="fw-bold">{{ Auth::user()->name }}</span>.</p>

                <hr>

                <h5 class="fw-semibold">Apa yang bisa kamu lakukan?</h5>
                <ul>
                    <li>Lihat dan promosiin produk UMKM kampus.</li>
                    <li>Ikut diskusi di forum dan berbagi tips usaha.</li>
                    <li>Temukan lokasi jualan mahasiswa dan pelaku UMKM.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
