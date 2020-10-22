<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function getBasket()
    {
        $categories = Basket::where('user_id', '=', Auth::user()->id)->get()->toArray();

        foreach ($categories as $key => $item) {
            $categories[$key]["show"] = true;
        }

        return view('cart', compact('categories'));
    }

    public function getBasket2()
    {
        return view('basket2');
    }

    public function insetInBasket(Request $request)
    {
        $comment = Basket::where('user_id', Auth::user()->id)->where('product_id', $request->input('product_id'))->first();

        if (empty($comment)) {
            $comment = Basket::create(['user_id' => Auth::user()->id, 'name' => $request->input('name'), 'count' => $request->input('count'), 'price' => $request->input('price'), 'product_id' => $request->input('product_id')]);
        } else {
            Basket::where('id', $comment['id'])->update([
                'count' => $comment['count'] + $request->input('count')
            ]);
        }

        return response()->json(['success' => 1]);
    }

    public function delInBasket(Request $request)
    {
        Basket::where('id', '=', $request->input('id'))->delete();
        return response()->json(['success' => 1]);
    }

    public function delInBasketAll()
    {
        Basket::where('user_id', '=', Auth::user()->id)->delete();
        return response()->json(['success' => 1]);
    }
}
