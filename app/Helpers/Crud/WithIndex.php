<?php

namespace App\Helpers\Crud;

/**
 * index
 */
trait WithIndex
{
    public function index()
    {
        return view($this->main, $this->indexData());
    }

    protected function indexData(): array
    {
        $data = ($this->model)::all();
        return compact('data');
    }
}
