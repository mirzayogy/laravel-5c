php artisan make:migration create_matakuliah_table

Isi migration

php artisan migrate

=======================================================

php artisan make:migration modify_matakuliah_add_semester

Isi migration-nya

php artisan migrate

=======================================================

php artisan make:model Matakuliah

protected $table = "matakuliah";
protected $guarded = [];

php artisan make:seeder MatakuliahSeeder

Matakuliah::create([
    'kode_mk' => "ABC123",
    'nama' => 'Tuwaga',
    'jumlah_sks' => 3,
    'semester' => 5,
    'prodi_id' => 1,
]);

$this->call(MatakuliahSeeder::class);

-- Pilihan: Terminal/Command Prompt
php artisan db:seed // mau lanjutan
php artisan db:seed --class=MatakuliahSeeder // kita yang tentukan
php artisan migrate:fresh --seed // mau dari awal

=======================================================
-- Buat controller
php artisan make:controller MatakuliahController //ini kosongan
php artisan make:controller MatakuliahController --resource // ini ada isinya
