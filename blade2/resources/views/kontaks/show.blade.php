@extends('layouts.app')

@section('title', 'Detail Kontak')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Detail Kontak</h2>

            <div class="card">
                <div class="card-body">
                    <h5>{{ $kontak->nama }}</h5>
                    <p><strong>Alamat:</strong> {{ $kontak->alamat }}</p>
                    <p><strong>No HP:</strong> {{ $kontak->no_hp }}</p>

                    <a href="{{ route('kontaks.edit', $kontak->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('kontaks.destroy', $kontak->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus kontak?')">Hapus</button>
                    </form>

                    <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
