<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::factory()->count(2)->create();
        /* DB::table('level')->insert([
            'description' => 'Administrador',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('level')->insert([
            'description' => 'Usuario normal',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); */
    }
}
