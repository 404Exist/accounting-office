<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $settings = collect(config('admin.site_settings'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now()])->toArray();

        Setting::insert($settings);
    }
}
