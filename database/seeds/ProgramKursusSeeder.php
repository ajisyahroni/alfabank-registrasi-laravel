<?php

use Illuminate\Database\Seeder;

class ProgramKursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProgramKursus::class,10)->create();
    }
}
