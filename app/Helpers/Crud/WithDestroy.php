<?php

namespace App\Helpers\Crud;

use Illuminate\Database\Eloquent\Model;

/**
 * Destroy
 */
trait WithDestroy
{
    protected function destroyAction(Model $model)
    {
        $model->delete();

        return null;
    }

    public function destroy($id)
    {
        $model = ($this->model)::findOrFail($id);

        $action = $this->destroyAction($model);

        return $action ?? redirect()->back();
    }
}
