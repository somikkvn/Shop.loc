<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getCategory()
    {
        return $this::all()->unique('code');
    }

    public function getItems($items)
    {
        return $this::where('code', $items)->get();
    }
}
