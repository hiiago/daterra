<?php

use Illuminate\Database\Seeder;


class PermissionRoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
       for($i=1; $i<=4; $i++){
       		//Administrador
       		DB::table('permission_role')->insert(['permission_id' => $i,'role_id' => '1']); 

       		//Agricultor
            DB::table('permission_role')->insert(['permission_id' => $i,'role_id' => '2']); 

            //Cooperativa
            DB::table('permission_role')->insert(['permission_id' => $i,'role_id' => '3']); 

            //Secretaria
            DB::table('permission_role')->insert(['permission_id' => $i,'role_id' => '4']); 

       }

    }

}
