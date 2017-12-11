<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(CategoriaAnuncioTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'Agricultor',
            'email' => 'agricultor@gmail.com',
            'password' => Hash::make('123123'),
        ]);

        DB::table('agricultors')->insert([
            'dap' => '123456789',
            'data_dap' => '2017-05-05',
            'telefone' => '(73) 988442211',
            'estado' => 'Bahia',
            'uf' => 'BA',
            'cidade' => 'Jequié',
            'rua' => 'Leonel Messias',
            'numero' => '444',
            'rg' => '123456789',
            'cpf' => '1234567899',
            'cep' => '45200-000',
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Cooperativa',
            'email' => 'cooperativa@gmail.com',
            'password' => Hash::make('123123'),
        ]);

        DB::table('cooperativas')->insert([
            'dap' => '123456789',
            'data_dap' => '2017-05-05',
            'telefone' => '(73) 988442211',
            'estado' => 'Bahia',
            'uf' => 'BA',
            'cidade' => 'Jequié',
            'rua' => 'Leonel Messias',
            'numero' => '444',
            'cnpj' => '123456789',
        'razao_social' => 'Razão Social',
        'nome_fantasia' => 'Nome Fantasia',
            'cep' => '45200-000',
            'user_id' => 2,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Secretaria',
            'email' => 'secretaria@gmail.com',
            'password' => Hash::make('123123'),
        ]);

        DB::table('secretarias')->insert([
        ]);

        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 3
        ]);

    }
}
