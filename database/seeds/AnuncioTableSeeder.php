<?php

use Illuminate\Database\Seeder;

class AnuncioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	for($i=0; $i<100; $i++){
            DB::table('anuncios')->insert([
            'titulo' => 'Alface Orgânico',
            'descricao' => 'descrição',
            'qtd' => 10,
            'agricultor_id' => 1,
            'preco' => 399.99,
            'imagem' => 'alface.jpg',
        ]);
        }
        
    }
}
