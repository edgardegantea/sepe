<?php

namespace Database\Seeders;

use App\Models\Aspecto;
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
        // $this->call(AspectoSeeder::class);
        //User::factory(10)->create();
        $this->call(SubjectSeeder::class);
        $this->call(EngineerSeeder::class);
    }
}
