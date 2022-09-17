<?php

namespace App\Helpers\Crud;

/**
 * store
 */
trait WithStore
{
    protected function storeAction(array $validated)
    {
        ($this->model)::create($validated);

        return null;
    }
    public function store()
    {

        $validated = $this->validationAction();
        $action    = $this->storeAction($validated);
        return $action ?? redirect()->route($this->main);
    }
}
