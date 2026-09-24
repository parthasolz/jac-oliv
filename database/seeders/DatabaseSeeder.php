<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@jacolivol.com'],
            [
                'name' => 'Jac Olivol Admin',
                'password' => 'Admin@1234',
                'email_verified_at' => now(),
            ],
        );
    }
}
