<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Text;
use Modules\Admin\Http\Requests\UpdateTextRequest;
use Modules\Admin\Repositories\Interfaces\TextsInterface;

class TextsController extends Controller
{
    public function __construct(private TextsInterface $text)
    {
    }

    public function index()
    {
        return $this->text->datatable();
    }

    public function edit(int $id)
    {
        return view('admin::texts.edit', ['text' => Text::find($id)]);
    }

    public function update(UpdateTextRequest $request, int $id)
    {
        $this->text->update($request, Text::find($id));

        return back()->with('success', "Texts have been updated successfully!");
    }
}
