<?php

namespace Modules\Admin\Datatables;

use Exist404\DatatableCruds\DatatableCruds;
use Modules\Admin\Entities\PageImage;

class PageImagesDatatableCruds
{
    /**
     * you can define all of your datatable globals methods here
    */
    public static function init(): DatatableCruds
    {
        return datatableCruds()
            ->for(PageImage::class)
            ->setBladeExtendsName("admin::layouts.auth")
            ->pushSectionToBlade("title", "Website Images")
            ->rowDeleteButton(false)
            ->rowCloneButton(false)
            ->rowAddButton(false)
            // ->setText("delete.message", "are you sure you want to delete |name| account ?")
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
            ->column('url')->label('image')->image()->exportable()->setAttribute("style", "height: 5rem; width: 6rem;")
            ->column('actions')->actions("Edit")
            ;
    }

    /**
     * you can define all of your datatable forms inputs here
    */
    protected static function inputs(): DatatableCruds
    {
        return datatableCruds()
            ->input("url")->label("Image")->dropzone([
                "acceptedFiles" => "jpg,png,webp,ico,icon,bmp,gif,tif,svg,psd",
                "multiple" => false,
                "addRemoveLinks" => false,
            ])->setAttribute('class', "w-50 mx-auto")
            ;
    }
}
