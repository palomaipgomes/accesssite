<?php namespace App\Observers;

use App\Test;

class TestObserver 
{
    public function creating(Test $model)
    {
        $model->user_id = auth()->user()->id;
    }   
}