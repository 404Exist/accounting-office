<?php

namespace Modules\Admin\Datatables;

use App\Models\Teammember;
use Exist404\DatatableCruds\DatatableCruds;

class TeammemberDatatableCruds
{
    /**
     * you can define all of your datatable globals methods here
    */
    public static function init(): DatatableCruds
    {
        return datatableCruds()
            ->for(Teammember::class)
            ->setBladeExtendsName("admin::layouts.auth")
            ->pushSectionToBlade("title", "Team mebmers")
            ->setText("delete.message", "are you sure you want to delete |name| account ?")
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
            ->column("order")->sortable()->searchable()->exportable()
            ->column('name')->sortable()->searchable()->exportable()
            ->column('picture')->image()->exportable()->setAttribute("style", "height: 5rem; width: 6rem;")
            ->column('actions')->actions()
            ;
    }

    /**
     * you can define all of your datatable forms inputs here
    */
    protected static function inputs(): DatatableCruds
    {
        return datatableCruds()
            ->input("order")->type("number")
            ->input("name")->type("text")
            ->input("picture")->dropzone([
                "acceptedFiles" => "jpg,png,webp,ico,icon,bmp,gif,tif,svg,psd",
                "multiple" => false,
                "addRemoveLinks" => false,
            ])->setAttribute('class', "w-50 mx-auto")
            ;
    }
}
