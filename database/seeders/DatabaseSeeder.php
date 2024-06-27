<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Counseling;
use App\Models\CounselingDetail;
use App\Models\User;
use Database\Factories\CounselingDetailFactory;
use Database\Factories\CounselingFactory;
use Database\Factories\QuestionFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('admin123'),
            'is_male' => true,
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'widya',
            'email' => 'widya@gmail.com',
            'password' => Hash::make('widya123'),
            'is_male' => false,
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'widya2',
            'email' => 'widya2@gmail.com',
            'password' => Hash::make('widya123'),
            'is_male' => false,
            'is_admin' => false,
        ]);

        QuestionFactory::new()->count(10)->create();

        Counseling::create([
            'user_id' => 2,
        ]);

        for($i = 1; $i <= 10; $i++) {
            CounselingDetail::create([
                'counseling_id' => 1,
                'question_id' => $i,
                'answer' => 'test jawab' . $i,
            ]);
        }

        Counseling::create([
            'user_id' => 3,
        ]);

        for($i = 1; $i <= 10; $i++) {
            CounselingDetail::create([
                'counseling_id' => 2,
                'question_id' => $i,
                'answer' => 'test jawab' . $i,
            ]);
        }

        // CounselingFactory::new()->count(10)->create();
        // CounselingDetailFactory::new()->count(100)->create();
    }
}
