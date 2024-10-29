<?php

namespace Database\Seeders;

use App\Models\FileCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Buku',],
            ['name' => 'Skripsi'],
            ['name' => 'Laporan KP'],
            ['name' => 'Laporan Magang'],
        ])->each(fn($item) => FileCategory::create($item));
    }
}
