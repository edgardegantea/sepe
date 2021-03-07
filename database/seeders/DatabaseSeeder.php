<?php

namespace Database\Seeders;

use App\Models\Aspecto;
use App\Models\Project;
use App\Models\Subject;
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
        $this->call(SubjectSeeder::class);
        Subject::factory(50)->create();

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        Project::factory(100)->create();





    }
}
