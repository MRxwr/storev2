<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $Categoies = Category::all();
        return view('admin.Category.index',compact('Categoies'));
    }

    public function create(Request $request){
        return view('admin.Category.create');
    }

    public function store(Request $request){
        $request->validate([
            'enTitle' => 'required',
            'arTitle' => 'required'
        ]);
        Category::create([
            'enTitle' => $request->enTitle,
            'arTitle' => $request->arTitle,
            'enDetails' => $request->arDetails,
            'arDetails' => $request->arDetails,
            'image' => $request->image,
            'banner' => $request->banner
        ]);
    }
}
