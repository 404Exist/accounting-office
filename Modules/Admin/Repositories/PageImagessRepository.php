<?php

namespace Modules\Admin\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Modules\Admin\Datatables\PageImagesDatatableCruds;
use Modules\Admin\Entities\PageImage;
use Modules\Admin\Repositories\Interfaces\PageImagessInterface;

class PageImagessRepository implements PageImagessInterface
{
    public function datatable()
    {
        return PageImagesDatatableCruds::init()->render();
    }

    public function update(Request $request, PageImage $pageImage): Model
    {
        $image = storeFile($request->file('url'), "admin/pages");

        if ($image) {
            $pageImage->update(['name' => $image]);
        }

        return $pageImage;
    }
}
