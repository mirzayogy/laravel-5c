Update

<form action="{{ route('matakuliah.update', $matakuliah) }}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <label for="">Kode MK</label>
    <input type="text" name="kode_mk" value={{ $matakuliah->kode_mk }}>
    <br>
    <label for="">Nama</label>
    <input type="text" name="nama" value={{ $matakuliah->nama }}>
    <br>
    <label for="">Jumlah SKS</label>
    <input type="text" name="jumlah_sks" value={{ $matakuliah->jumlah_sks }}>
    <br>
    <label for="">Semester</label>
    <input type="text" name="semester" value={{ $matakuliah->semester }}>
    <br>
    <label for="">Prodi ID</label>
    <input type="text" name="prodi_id" value={{ $matakuliah->prodi_id }}>
    <br>
    <button type="submit">Simpan</button>
</form>
