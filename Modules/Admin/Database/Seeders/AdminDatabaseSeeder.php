<?php

namespace Modules\Admin\Database\Seeders;

use Hash;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Admin::create([
            "name" => "Admin",
            "email" => "zozol13@kancelaria-dfk.pl",
            "password" => Hash::make("password@1234"),
            "picture" => "default.png",
        ]);

        $this->call([
            SettingTableSeeder::class,
            TextTableSeeder::class,
            PageImageTableSeeder::class,
        ]);
    }
}
