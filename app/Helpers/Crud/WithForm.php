<?php

namespace App\Helpers\Crud;


/**
 * form
 */
trait WithForm
{

    public function create()
    {
        return view($this->createForm, $this->formData());
    }

    public function edit($id)
    {
        $model = ($this->model)::findOrFail($id);

        return view($this->editForm, array_merge($model, $this->formData()));
    }

    protected function formData(): array
    {
        return [];
    }
}
