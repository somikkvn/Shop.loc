@extends('layouts.layout')
@section('title')
    Basket
@endsection

@section('main_content')

<navbar-component></navbar-component>

<div class="container">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
                <th>Button</th>
            </tr>
            </thead>

            @foreach ($categories as $item)
            <tbody id="cart">
                <div>
                   <td>{{$item['name']}}</td>
                   <td>{{$item['price']}}</td>
                   <td>{{$item['count']}}</td>
                   <td>{{$item['sum']}}</td>
                   <td><button id="{{$item['id']}}" class="btn btn-danger button_basket">Delete</button></td>
                </div>
            @endforeach
            </tbody>
                <button style="width: 100%" id="{{$item['user_id']}}" class="btn btn-danger button_basket2">Delete All</button>
        </table>
    </div>
    <div><b>Итого: </b><span id="total-cart-summa">{{$sum}}</span> грн.</div>
    <br>
    <button id="order" class="btn btn-info">Оформить заказ</button>
</div>

@endsection
