<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostreTSeeder::class,
            PostreCSeeder::class,
            PostreHSeeder::class,
        ]);
    }
}
