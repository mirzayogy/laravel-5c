@extends('template.default')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Matakuliah</h1>
    {{-- {{ dd($banyak_matakuliah) }} --}}
    @if (session('berhasil'))
        <br>
        {{ session('berhasil') }}
        <br>
    @endif
    <div class="card shadow mb-4">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success">Tambah</a>
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
                            <a href="{{ route('matakuliah.edit', $matakuliah) }}" class="btn btn-primary">Ubah</a>
                            <a href="#" onclick="konfirmasi('{{ route('matakuliah.destroy', $matakuliah) }}')"
                                class="btn btn-danger">Hapus</a>
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
