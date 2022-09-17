<?php

namespace App\Helpers\Crud;

/**
 * 
 */
trait WithCrud
{

    use Validation, WithStore, WithUpdate, WithDestroy, WithForm, WithIndex, WithShow;
}
