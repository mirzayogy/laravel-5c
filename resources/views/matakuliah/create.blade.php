@extends('template.default')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Matakuliah</h1>
        <a href="/matakuliah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Kembali</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Matakuliah Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="kode_mk" class="form-label">Kode Matakuliah</label>
                    <input type="text" class="form-control" id="kode_mk" name="kode_mk" aria-describedby="kode_mk">
                </div>
                <br>
                <label for="">Nama</label>
                <input type="text" name="nama">
                <br>
                <label for="">Jumlah SKS</label>
                <input type="text" name="jumlah_sks">
                <br>
                <label for="">Semester</label>
                <input type="text" name="semester">
                <br>
                <label for="">Prodi ID</label>
                <input type="text" name="prodi_id">
                <br>
                <button class="d-none d-sm-inline-block btn btn-success shadow-sm" type="submit">
                    <i class="fas fa-save fa-sm text-white-50"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>
@endsection
