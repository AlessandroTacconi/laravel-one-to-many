<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for($i = 0; $i < 25; $i++){
            
        
        $project = new Project();

        $project->title = $faker->sentence(5);
        $project->slug = Str::of($project->title)->slug('-');
        $project->description = $faker->text(450);
        $project->link = $faker->url();
        $project->image = 'img';
        $project->year = $faker->year();

        $project->save();
        }
    }
}


            // $table->string('title', '100')->unique();
            // $table->string('slug');
            // $table->text('description')->nullable();
            // $table->string('link')->nullable();
            // $table->string('image')->nullable();
            // $table->smallInteger('year')->unsigned();