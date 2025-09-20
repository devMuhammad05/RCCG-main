<?php

namespace Database\Seeders;

use App\Enums\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use App\Enums\ArticleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Admin
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@rccg-be.com',
            'email_verified_at' => now(),
            'role' => Role::Admin->value,
            'password' => Hash::make('rccgbe'),
        ]);


        DB::table('articles')->insert([
            [
                'thumbnail' => 'thumbnails/article1.jpg',
                'title' => 'Daily Family Devotion Guide',
                'slug' => Str::slug('Daily Family Devotion Guide'),
                'category' => ArticleCategory::FamilyDevotion->value,
                'sub_title' => 'Strengthening families through devotion',
                'body' => 'This article provides structured devotion plans designed to bring families closer to God.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'thumbnail' => 'thumbnails/article2.jpg',
                'title' => 'Living Purposefully as a Single',
                'slug' => Str::slug('Living Purposefully as a Single'),
                'category' => ArticleCategory::Single->value,
                'sub_title' => 'Finding joy and direction in singlehood',
                'body' => 'Practical lessons and biblical wisdom for singles to thrive in their walk with God.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'thumbnail' => 'thumbnails/article3.jpg',
                'title' => 'Raising Godly Children',
                'slug' => Str::slug('Raising Godly Children'),
                'category' => ArticleCategory::Children->value,
                'sub_title' => 'Instilling biblical values in kids',
                'body' => 'Tips and devotionals tailored for children to learn about God in a simple, engaging way.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'thumbnail' => 'thumbnails/article4.jpg',
                'title' => 'The Power of Prayer in Every Home',
                'slug' => Str::slug('The Power of Prayer in Every Home'),
                'category' => ArticleCategory::FamilyDevotion->value,
                'sub_title' => 'Building a praying family',
                'body' => 'Discover the role of prayer in shaping strong families and raising godly children.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'thumbnail' => 'thumbnails/article5.jpg',
                'title' => 'General Christian Living Tips',
                'slug' => Str::slug('General Christian Living Tips'),
                'category' => ArticleCategory::Others->value,
                'sub_title' => 'Walking faithfully in all areas of life',
                'body' => 'A collection of teachings and encouragement for Christians in diverse walks of life.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        $this->call([
            EventSeeder::class,
        ]);
    }
}
