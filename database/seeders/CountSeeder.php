<?php

namespace Database\Seeders;

use App\Models\Count;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Count::factory()->count(20)->create();
    }
}
