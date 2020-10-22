<?php

namespace App\Http\Controllers;

use App\Category;

class MainController extends Controller
{
    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function getItems($items)
    {
        $model = new Category();
        $categories = $model->getItems($items);
        return view('categoryItems', compact('categories'));
    }

    public function getCategory()
    {
        $model = new Category();
        $categoryObject = $model->getCategory();
        return view('category', compact('categoryObject'));
    }

}
