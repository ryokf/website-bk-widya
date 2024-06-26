<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Database\Factories\CounselingDetailFactory;
use Database\Factories\CounselingFactory;
use Database\Factories\QuestionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        QuestionFactory::new()->count(10)->create();
        CounselingFactory::new()->count(10)->create();
        CounselingDetailFactory::new()->count(100)->create();
    }
}
