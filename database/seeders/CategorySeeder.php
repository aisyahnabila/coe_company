<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CategoryArticle::insert([
            ['category_name' => 'PELATIHAN SEMINAR'],
            ['category_name' => 'PENGABDIAN MASYARAKAT'],
        ]);
    }
}
