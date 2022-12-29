<?php

namespace Modules\Admin\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Modules\Admin\Entities\PageImage;

interface PageImagessInterface extends DataTableInterface
{
    public function update(Request $request, PageImage $text): Model;
}
