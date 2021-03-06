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
        $this ->call(LayananSeeder::class);
        $this ->call(AntrianSeeder::class);
        $this ->call(UserSeeder::class);
    }
}
