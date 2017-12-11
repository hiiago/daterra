<?php

use Illuminate\Database\Seeder;

class AgricultorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'nome' => 'hiago',
            'email' => 'hspereira39@gmail.com',
            'password' => '123123',
            'dap' => '123456789',
            'data_dap' => '2017/05/05',
            'telefone' => '(73) 98834-2173',
            'uf' => 'BA',
            'cidade' => 'Jequié',
        ]);

        DB::table('agricultors')->insert([
            'rg' => '137994499',
            'cpf' => '85793711233',
          	'user_id' => 1
        ]);
    }
}
