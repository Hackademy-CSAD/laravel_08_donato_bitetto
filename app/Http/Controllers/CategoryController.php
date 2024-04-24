<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function games(Category $category){
        return view('category.games',compact("category"));
    }
}
