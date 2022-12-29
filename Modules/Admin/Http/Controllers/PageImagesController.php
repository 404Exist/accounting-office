<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\PageImage;
use Modules\Admin\Repositories\Interfaces\PageImagessInterface;

class PageImagesController extends Controller
{
    public function __construct(private PageImagessInterface $pageImage)
    {
    }

    public function index()
    {
        return $this->pageImage->datatable();
    }

    public function update(Request $request, int $id)
    {
        $this->pageImage->update($request, PageImage::find($id));

        return response([
            'toast-message' => 'Page Image have been updated successfully!',
            'toast-type' => 'success',
        ]);
    }
}
