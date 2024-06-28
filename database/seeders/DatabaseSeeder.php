<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Counseling;
use App\Models\CounselingDetail;
use App\Models\Question;
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

        // QuestionFactory::new()->count(10)->create();

        $question = [
            "Bagaimana perasaanmu hari ini ?",
            "Apa yang membuatmu merasa tertekan atau khawatir saat ini?",
            "Apakah ada hal-hal tertentu yang ingin kamu diskusikan atau bahas?",
            "Apakah kamu memiliki tujuan atau harapan tertentu untuk sesi konseling ini?",
            "Bagaimana kamu mengatasi stres atau kecemasan dalam kehidupan sehari-hari?",
            "Apakah ada konflik atau masalah hubungan yang ingin kamu bahas?",
            "Bagaimana perasaanmu terhadap dirimu sendiri saat ini?",
            "Apakah ada perubahan besar dalam kehidupanmu yang mempengaruhi kesejahteraan emosionalmu?",
            "Bagaimana cara terbaik bagi kamu untuk mengelola emosi saat situasi sulit muncul?",
            "Apakah ada pertanyaan atau kekhawatiran lain yang ingin kamu sampaikan?",
        ];

        foreach ($question as $value) {
            Question::create([
                'question' => $value
            ]);
        }

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
