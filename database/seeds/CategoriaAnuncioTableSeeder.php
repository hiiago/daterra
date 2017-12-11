<?php

use Illuminate\Database\Seeder;

class CategoriaAnuncioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_anuncios')->insert([
            'titulo' => 'Legumes'
        ]);

        DB::table('categoria_anuncios')->insert([
            'titulo' => 'Verduras'
        ]);
    }
}
