<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Text;

class TextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $texts = collect(config('admin.site_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now()])->toArray();

        Text::insert($texts);
    }
}
