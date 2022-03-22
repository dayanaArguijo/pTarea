<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\postreC;


class PostreCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        postreC::factory(500)->create();
    }
}
