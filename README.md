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

$this->call(MatakuliahSeeder::class);

php artisan migrate:fresh --seed
