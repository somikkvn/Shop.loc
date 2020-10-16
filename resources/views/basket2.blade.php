@extends('layouts.layout')
@section('title')
    Basket
@endsection

@section('main_content')

<navbar-component></navbar-component>
<div style="text-align: center; padding: 16px; background: #de8885">
    <h1>Ваша корзина пуста</h1>
</div><br>

<div style="text-align: center; padding: 16px; background: #85de86">
    <h2><a href="/categories">Для совершения покупок, вернитесь на страницу выбора товаров</a></h2>
</div>

@endsection
