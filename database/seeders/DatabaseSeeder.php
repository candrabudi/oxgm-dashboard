<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\GeneralSetting;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'lawrenadmin',
            'email' => 'lawrenadmin@lwa.com',
            'role' => 'admin',
            'password'=> bcrypt('@123Same'),
            'is_active' => 1,
        ]);

        GeneralSetting::insert([
            [
                'web_name' => 'Example Site 1',
                'web_description' => 'This is a description for Example Site 1.',
                'web_logo_url' => 'https://example.com/logo1.png',
                'web_favicon_url' => 'https://example.com/favicon1.ico',
                'web_url' => 'https://example.com',
                'web_status' => 1,
            ],
        ]);        
    }
}
