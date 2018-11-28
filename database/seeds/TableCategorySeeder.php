<?php

use Illuminate\Database\Seeder;
use App\Category;
class TableCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
           'name' => 'Kegiatan Mahasiswa',
           'slug' => str_slug('Kegiatan Mahasiswa')
        ]);
        Category::create([
           'name' => 'Prestasi',
           'slug' => str_slug('Prestasi')
        ]);
    }
}
