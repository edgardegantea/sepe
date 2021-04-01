<?php

namespace Database\Seeders;

use App\Models\Aspecto;
use App\Models\Project;
use App\Models\Subject;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Storage::deleteDirectory('upload-projects');
        //Storage::makeDirectory('upload-projects');

        $this->call(SubjectSeeder::class);
        Subject::factory(30)->create();

        Team::factory(10)->create();

        $this->call(RoleSeeder::class);


        $this->call(UserSeeder::class);

        User::factory(30)->create()->each(function ($user) {

            $user->teams()->attach($this->array(rand(1, 10)));

        });


        //Project::factory(5)->create();
    }

    public function array($max)
    {
        $values = [];
        for ($i = 1; $i < $max; $i++) {
            $values[] = $i;
        }

        return $values;
    }
}
