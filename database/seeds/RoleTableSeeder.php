<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [   
                'name' => 'Administrador',
                'display_name' => 'Administrador do Sistema',
                'description' => 'Realiza gestão completa do sistema'
            ],
            [
                'name' => 'Agricultor',
                'display_name' => 'Agricultor',
                'description' => ''
            ],
            [
                'name' => 'Cooperativa',
                'display_name' => 'Cooperativa',
                'description' => ''
            ],
            [
                'name' => 'Secretaria',
                'display_name' => 'Secretaria',
                'description' => ''
            ],
            
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }

    }
}
