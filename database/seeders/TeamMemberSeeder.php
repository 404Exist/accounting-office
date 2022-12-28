<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = collect([
            ['name' => "member 1", "picture" => "hosting-lemontax.webp", "order" => 1],
            ['name' => "member 2", "picture" => "hosting-lemontax.webp", "order" => 2],
            ['name' => "member 3", "picture" => "hosting-lemontax.webp", "order" => 3],
            ['name' => "member 4", "picture" => "hosting-lemontax.webp", "order" => 4],
        ])
        ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now()])
        ->toArray();

        TeamMember::insert($members);
    }
}
