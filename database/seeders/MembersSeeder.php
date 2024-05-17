<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('_members')->insert([
        //     'name'=>Str::random(10),
        //     'age'=>rand(18,60), // Generating a random integer for age

        // ]);
        Member::factory()->count(10)->create();
    }
}
