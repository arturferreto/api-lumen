<?php

namespace Database\Seeders;

use App\Models\{Author, News};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(50)->create();
        News::factory(1000)->create();
    }
}
