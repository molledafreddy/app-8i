<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
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
        $orders = Order::with('user','shippingAddress','products')->search($search)->orderBy($orderBy, $type)->paginate($perPage);

        return response()->json(['status' => 'ok', 'data' => $orders], 200);
    }

    public function show($id)
    {
        $order = Order::where('id', $id)->with('user','shippingAddress','products')->first();

        return response()->json(['status' => 'ok', 'data' => $order], 200);
    }
}
