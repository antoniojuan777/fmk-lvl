<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opciones')->insert([
            [
                'titulo'=>'opcion 1'
            ],
            [
                'titulo'=>'opcion 2'
            ]
        ]);
    }
}
