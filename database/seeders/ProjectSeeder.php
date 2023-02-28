<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newProject = new Project();

        for($i=0; $i<10; $i++){
            $newProject->titolo = Str::slug($faker->name(), '-');
            $newProject->descrizione = $faker->paragraph(2);

            $newProject->save();
        }
    }
}
