@extends('template.default')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Prodi</h1>
        <a href="/prodi" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Kembali</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Prodi Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="kode_prodi" class="form-label">Kode Prodi</label>
                    <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" aria-describedby="kode_prodi">
                </div>
                <br>
                <label for="">Nama</label>
                <input type="text" name="nama_prodi">
                <br>
                <button class="d-none d-sm-inline-block btn btn-success shadow-sm" type="submit">
                    <i class="fas fa-save fa-sm text-white-50"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>
@endsection
