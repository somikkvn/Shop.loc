<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect, Response, Stripe;

class StripeController extends Controller
{
    public function index(Request $request)
    {
        $getSum = 0;
        $data = $request->session()->get('card');

        foreach ($data as $item) {
            $getItems = Basket::where('id', '=', $item['product_id'])->value('price');
            $getSum += ($getItems * ($item['count']));

        }

        return view('stripe', compact('getSum'));
    }

    public function store(Request $request)
    {
        $getSum = 0;
        $data = $request->session()->get('card');

        foreach ($data as $item) {
            $getItems = Basket::where('id', '=', $item['product_id'])->value('price');
            $getSum += ($getItems * ($item['count']));
        }

        return Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'USD',
            'amount' => $getSum
        ]);
    }

    public function insStripe(Request $request)
    {
        $arr = json_decode($request->input('card'), true);
        session()->put(['card' => $arr]);
    }
}
