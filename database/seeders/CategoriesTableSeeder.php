<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        
        DB::table('categories')->insert(array (
            0 => 
            array (
                'order' => 1,
                'name' => 'Berita',
                'slug' => 'berita',
            ),
            1 => 
            array (
                'order' => 1,
                'name' => 'Pengumuman',
                'slug' => 'pengumuman',
            ),
            2 => 
            array (
                'order' => 1,
                'name' => 'Produk',
                'slug' => 'produk',
            ),
        ));
        
        
    }
}