<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Post};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Israel Rios M.',
            'email' => 'isra@admin.com',
            //usamos metodo de encriptacion
            'password' => bcrypt('1sra')
        ]);

        Post::factory(24)->create();
    }
}
