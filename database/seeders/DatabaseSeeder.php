<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\course;
use App\Models\question;
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
        User::factory(10)->create();
        course::factory(10)->create();
        question::factory(10)->create();

    }
}
