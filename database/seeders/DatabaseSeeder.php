<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Authentication\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
}
