<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Post;
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
        User::factory(10)->create();
        Post::factory(10)->create();
        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => Hash::make("admin")
        ]);
    }
}
