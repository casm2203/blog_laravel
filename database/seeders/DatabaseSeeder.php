<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $curso = new Curso();
        // $curso->name = "Laravel";
        // $curso->descripcion = "el mejor frameword";
        // $curso->categoria = "framework";
        // $curso->save();
        User::factory(10)->create();
        Curso::factory(50)->create();
    }
}
