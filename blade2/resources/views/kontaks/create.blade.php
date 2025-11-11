@extends('layouts.app')

@section('title', 'Tambah Kontak Baru')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Tambah Kontak Baru</h2>

            <form action="{{ route('kontaks.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" class="form-control" name="no_hp" required>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
