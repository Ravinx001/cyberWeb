<?php

namespace Database\Seeders;

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
            'name' => 'Worker',
            'email' => 'rav.normal@gmail.com',
            'role' => '1',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
        ]);

        $supervisor = User::factory()->create([
            'name' => 'Supervisor',
            'email' => 'rav.business.lak@gmail.com',
            'role' => '2',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
        ]);

        $manager = User::factory()->create([
            'name' => 'Manager',
            'email' => 'rav.ban.col.lak@gmail.com',
            'role' => '3',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'rav.sharing@gmail.com',
            'role' => '4',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
        ]);
    }
}
