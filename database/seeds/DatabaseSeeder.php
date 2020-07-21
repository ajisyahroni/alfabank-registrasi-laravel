<?php

use App\ProgramKursus;
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
        $this->call(UserSeeder::class);
        $this->call(ProgramKursusSeeder::class);
        $this->call(InboxSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(BlogSeeder::class);

    }
}

