@extends('layouts.app')

@section('title', 'Profil - Forum UMKM Tel-U')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Profil Pengguna</div>
    <div class="card-body">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Bergabung Sejak:</strong> {{ Auth::user()->created_at->diffForHumans() }}</p>
    </div>
</div>
@endsection
