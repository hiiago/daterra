<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            
        /**/[
        		'name' => 'anuncio-list',
        		'display_name' => 'Listagem de Anúncios',
        		'description' => 'Listagem de Anúncios'
        	],
        /**/[
                'name' => 'anuncio-create',
                'display_name' => 'Criar Anúncios',
                'description' => 'Criar Anúncios'
            ],
        /**/[
                'name' => 'anuncio-edit',
                'display_name' => 'Editar Anúncios',
                'description' => 'Editar Anúncios'
            ],
        /**/[
                'name' => 'anuncio-delete',
                'display_name' => 'Excluir Anúncios',
                'description' => 'Excluir Anúncios'
            ]

        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
