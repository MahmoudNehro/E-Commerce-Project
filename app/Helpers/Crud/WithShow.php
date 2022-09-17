<?php

namespace App\Helpers\Crud;


/**
 * Show
 */
trait WithShow
{
    public function showAction($id)
    {
        $model = ($this->model)::findOrFail($id);

        return $model;
    }

    public function show($id)
    {
        $model = $this->showAction($id);

        return view($this->showView, compact('model'));
    }
}
