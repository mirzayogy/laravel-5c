Create
<form action="{{ route("matakuliah.store") }}" method="POST">
    @csrf
    @method('POST')
    <br>
    <label for="">Kode MK</label>
    <input type="text" name="kode_mk">
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
    <button type="submit">Simpan</button>
</form>
