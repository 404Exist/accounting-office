<?php

namespace Modules\Admin\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Datatables\TextDatatableCruds;
use Modules\Admin\Entities\Text;
use Modules\Admin\Http\Requests\UpdateTextRequest;
use Modules\Admin\Repositories\Interfaces\TextsInterface;

class TextsRepository implements TextsInterface
{
    public function datatable()
    {
        return TextDatatableCruds::init()->render();
    }

    public function update(UpdateTextRequest $request, Text $text): Model
    {
        $text->update(['value' => ['pl' => $request->pl_text, 'en' => $request->en_text]]);

        return $text;
    }
}
