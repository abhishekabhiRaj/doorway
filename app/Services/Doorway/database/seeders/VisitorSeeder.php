<?php

namespace App\Services\Doorway\Database\Seeders;

use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Doorway\Visitors::factory(10)->create();
    }
}
