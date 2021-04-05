<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'tipo_rol'=>'ROL-SUP',
                'user_id'=>1,
                'registra'=>true,
                'recupera'=>true,
                'imprime'=>true,
                'elimina'=>true
            ]
        ]);
    }
}
