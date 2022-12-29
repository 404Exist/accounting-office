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

        $global_texts = collect(config('admin.global_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "global"])
            ->toArray();

        $home_texts = collect(config('admin.home_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "home"])
            ->toArray();

        $about_us_texts = collect(config('admin.about_us_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "about_us"])
            ->toArray();

        $full_accountancy_texts = collect(config('admin.full_accountancy_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "full_accountancy"])
            ->toArray();

        $ledger_texts = collect(config('admin.ledger_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "ledger"])
            ->toArray();

        $registerd_lump_sum_texts = collect(config('admin.registerd_lump_sum_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "registerd_lump_sum"])
            ->toArray();

        $hr_and_payroll_texts = collect(config('admin.hr_and_payroll_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "hr_and_payroll"])
            ->toArray();

        $tax_consultancy_texts = collect(config('admin.tax_consultancy_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "tax_consultancy"])
            ->toArray();

        $establishment_of_the_company_texts = collect(config('admin.establishment_of_the_company_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "establishment_of_the_company"])
            ->toArray();

        $virtual_office_texts = collect(config('admin.virtual_office_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "virtual_office"])
            ->toArray();

        $free_website_texts = collect(config('admin.free_website_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "free_website"])
            ->toArray();

        $contact_texts = collect(config('admin.contact_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "contact"])
            ->toArray();

        $offline_texts = collect(config('admin.offline_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "offline"])
            ->toArray();

        $privacy_policy_texts = collect(config('admin.privacy_policy_texts'))
            ->map(fn($item) => $item + ['created_at' => now(), 'updated_at' => now(), 'page_name' => "privacy_policy"])
            ->toArray();

        Text::insert($global_texts);
        Text::insert($home_texts);
        Text::insert($about_us_texts);
        Text::insert($full_accountancy_texts);
        Text::insert($ledger_texts);
        Text::insert($registerd_lump_sum_texts);
        Text::insert($hr_and_payroll_texts);
        Text::insert($tax_consultancy_texts);
        Text::insert($establishment_of_the_company_texts);
        Text::insert($virtual_office_texts);
        Text::insert($free_website_texts);
        Text::insert($contact_texts);
        Text::insert($offline_texts);
        Text::insert($privacy_policy_texts);
    }
}
