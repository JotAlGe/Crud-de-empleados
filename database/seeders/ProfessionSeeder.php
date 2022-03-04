<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profession;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profession::factory()->count(3)->create();

        // FORMA MANUAL CON SQL
        //DB::insert('
        //    INSERT INTO professions (title, created_at) values (:title, :created_at)', [
        //    'title' => 'Arquitecto de software',
        //    'created_at' => NOW()
        //]);

        /* Profession::create([
            'title' => 'Frontend Developer'
        ]);
        Profession::create([
            'title' => 'Backend Developer'
        ]);
        Profession::create([
            'title' => 'DBA Administrator'
        ]); */

        // INSERTAR CON LARAVEL
        #DB::table('professions')->insert([
        #    'title' => 'Backend Developer'
        #]);
        #DB::table('professions')->insert([
        #    'title' => 'Frontend Developer'
        #]);
        #DB::table('professions')->insert([
        #    'title' => 'DBA'
        #]);
    }
}
