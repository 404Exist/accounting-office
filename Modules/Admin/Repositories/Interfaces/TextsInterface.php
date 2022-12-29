<?php

namespace Modules\Admin\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Text;
use Modules\Admin\Http\Requests\UpdateTextRequest;

interface TextsInterface extends DataTableInterface
{
    public function update(UpdateTextRequest $request, Text $text): Model;
}
