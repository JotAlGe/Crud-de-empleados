<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;






class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        // utilizando factories
        User::factory()->count(10)->create();
        #User::factory(10)->create();

        #$professions = DB::select('select id_prof from professions where title = Backend Developer');
        #dd($professions);

        // una forma de obtener un solo resultado
        #$professions = DB::table('professions')->select('id_prof')->take(1)->get();

        // otra forma de obtener un valor
        #$profession = DB::table('professions')->select('id_prof')->first();
        #dd($profession);

        /* $profession = Profession::where('title', 'Backend Developer')->value('id_prof');
        $profession1 = Profession::where('title', 'Frontend Developer')->value('id_prof'); */
        #$profession = Profession::find(1);
        #dd($profession);

        #$level = DB::table('level')->select('id')->first();
        /* $level = Level::where('id', 2)->value('id');
        dd($level); */

        ########### con eloquent
        /* User::create([
            'name' => 'Juan',
            'lastname' => 'González',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('123'),
            'id_level' => 2,
            'profession_id' => $profession,
        ]);
        User::create([
            'name' => 'Antonio',
            'lastname' => 'Sosa',
            'email' => 'antonio22@gmail.com',
            'password' => bcrypt('123'),
            'id_level' => 2,
            'profession_id' => $profession1,
        ]); */

        #dd(User::find(1, ['name', 'lastname']));
        #dd(User::find(1)->value('name'));
        /*  Profession::create([
            'name' => 'Turque',
            'lastname' => 'Gonz',
            'email' => 'turque11@gmail.com',
            'password' => bcrypt('123'),
            'id_level' => $level->id,
            'profession_id' => $profession->id_prof,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); */

        ##################  constructor de consultas
        /* DB::table('user')->insert([
            'name' => 'Juan',
            'lastname' => 'González',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('123'),
            'id_level' => $level->id,
            'profession_id' => $profession->id_prof,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('user')->insert([
            'name' => 'Turque',
            'lastname' => 'Gonz',
            'email' => 'turque11@gmail.com',
            'password' => bcrypt('123'),
            'id_level' => $level->id,
            'profession_id' => $profession->id_prof,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); */
    }
}
