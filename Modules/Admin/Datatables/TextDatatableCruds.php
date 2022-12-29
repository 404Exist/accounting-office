<?php

namespace Modules\Admin\Datatables;

use Exist404\DatatableCruds\DatatableCruds;
use Modules\Admin\Entities\Text;

class TextDatatableCruds
{
    /**
     * you can define all of your datatable globals methods here
    */
    public static function init(): DatatableCruds
    {
        return datatableCruds()
            ->for(Text::class)
            ->setBladeExtendsName("admin::layouts.auth")
            ->pushSectionToBlade("title", "Website Texts")
            ->rowDeleteButton(false)
            ->rowCloneButton(false)
            ->rowAddButton(false)
            ->rowEditButton(html: 'Edit', onclick: 'href', value: route('admin.texts.edit', '|id|'))
            ->selectFilter(
                "page_name",
                [
                    "global" => "global",
                    "home" => "home",
                    "about_us" => "about_us",
                    "full_accountancy" => "full_accountancy",
                    "ledger" => "ledger",
                    "registerd_lump_sum" => "registerd_lump_sum",
                    "hr_and_payroll" => "hr_and_payroll",
                    "tax_consultancy" => "tax_consultancy",
                    "establishment_of_the_company" => "establishment_of_the_company",
                    "virtual_office" => "virtual_office",
                    "free_website" => "free_website",
                    "contact" => "contact",
                    "privacy_policy" => "privacy_policy",
                    "offline" => "offline",
                ],
                "page",
                "global"
            )
            ->columns(static::columns())
            ->inputs(static::inputs())
            ;
    }

    /**
     * you can define all of your datatable columns here
    */
    protected static function columns(): DatatableCruds
    {
        return datatableCruds()
            ->column("page_name")->sortable()->searchable()->exportable()
            ->column('value.pl')->sortable()->searchable()->exportable()
                ->setAttribute('style', 'text-overflow: ellipsis;max-width: 200px;overflow: hidden;max-height: 195px;')
            ->column('value.en')->sortable()->searchable()->exportable()
                ->setAttribute('style', 'text-overflow: ellipsis;max-width: 200px;overflow: hidden;max-height: 195px;')
            ->column('actions')->actions("Edit")
            ;
    }

    /**
     * you can define all of your datatable forms inputs here
    */
    protected static function inputs(): DatatableCruds
    {
        return datatableCruds()
            ->input('tes')->html('<div class="editor"></div>')
            ->input("value.pl")->type("textarea")->setAttribute('class', 'editor')
            ->input("value.en")->type("textarea")
            ;
    }
}
