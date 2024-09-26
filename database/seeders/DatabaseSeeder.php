<?php

namespace Database\Seeders;

use App\Models\Questions;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'rav.normal@gmail.com',
            'role' => '1',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
        ]);


        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'rav.sharing@gmail.com',
            'role' => '2',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
        ]);

        $question1 = Questions::create([
            'question' => '1',
            'answer' => '2',
        ]);

        $question2 = Questions::create([
            'question' => '2',
            'answer' => '2',
        ]);

        $question3 = Questions::create([
            'question' => '3',
            'answer' => '2',
        ]);

        $question4 = Questions::create([
            'question' => '4',
            'answer' => '2',
        ]);

        $question5 = Questions::create([
            'question' => '5',
            'answer' => '2',
        ]);

        $questio6 = Questions::create([
            'question' => '6',
            'answer' => '2',
        ]);

        $question7 = Questions::create([
            'question' => '7',
            'answer' => '2',
        ]);

        $question8 = Questions::create([
            'question' => '8',
            'answer' => '2',
        ]);

        $question9 = Questions::create([
            'question' => '9',
            'answer' => '2',
        ]);

        $question10 = Questions::create([
            'question' => '10',
            'answer' => '2',
        ]);
    }
}
