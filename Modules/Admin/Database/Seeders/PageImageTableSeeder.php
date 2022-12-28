<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\PageImage;

class PageImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $images = collect(config('admin.site_images'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now()])->toArray();

        PageImage::insert($images);
    }
}
