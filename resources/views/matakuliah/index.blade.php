@extends('template.default')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Matakuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah</a>
    </div>
    {{-- {{ dd($banyak_matakuliah) }} --}}
    @if (session('berhasil'))
        <br>
        {{ session('berhasil') }}
        <br>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Matakuliah</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Kode MK</th>
                    <th>Nama</th>
                    <th>Opsi</th>
                </tr>
                @foreach ($banyak_matakuliah as $matakuliah)
                    <tr>
                        <td>{{ $matakuliah['id'] }}</td>
                        <td>{{ $matakuliah['kode_mk'] }}</td>
                        <td>{{ $matakuliah['nama'] }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $matakuliah) }}"
                                class="btn btn-primary btn-sm btn-icon-split">
                                {{-- <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span> --}}
                                <span class="text">Ubah</span>
                            </a>
                            <a href="#" onclick="konfirmasi('{{ route('matakuliah.destroy', $matakuliah) }}')"
                                class="btn btn-danger btn-sm btn-icon-split">
                                {{-- <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span> --}}
                                <span class="text">Hapus</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <form action="" method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function konfirmasi(href) {
            if (confirm('Apakah yakin?')) {
                document.getElementById('deleteForm').action = href
                document.getElementById('deleteForm').submit()
            }
        }
    </script>
@endsection
