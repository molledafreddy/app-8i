<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search    = '';
        $orderBy   = $request->orderBy == null ? 'id' : $request->orderBy;
        $type      = $request->type == 'true' ? 'DESC' : 'ASC';
        $perPage   = $request->perPage == null ? 10 : $request->perPage;
        if (!empty($request->search)) {
            $search = $request->search;
        }
        $categories = Category::with('products')->search($search)->orderBy($orderBy, $type)->paginate($perPage);
        
        return response()->json(['status' => 'ok', 'data' => $categories], 200);
    }

    public function show($id)
    {
        $category = Category::where('id', $id)->with('products')->first();

        return response()->json(['status' => 'ok', 'data' => $category], 200);
    }
}
