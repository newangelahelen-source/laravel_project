<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = CategoryProduct::paginate(5);
        return view ('pages.Category.show', compact('kategori'));  //
    }

}
