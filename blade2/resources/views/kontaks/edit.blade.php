@extends('layouts.app')

@section('title', 'Edit Kontak')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Kontak</h2>

            <form action="{{ route('kontaks.update', $kontak->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $kontak->nama }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" required>{{ $kontak->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" class="form-control" name="no_hp" value="{{ $kontak->no_hp }}" required>
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
