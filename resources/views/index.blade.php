@extends('layouts.layout')

@section('title')
    All Products
@endsection

@section('main_content')

    <navbar-component></navbar-component>
    <div style="padding: 15px">
        <img style="padding: 15px; height: 280px" align="right" src="{{URL::asset('/images/3.jpg')}}">
        <p align="justify">Who are we? We are a local electronic store serving the Central Valley. We offer low prices
            on all of our electronics. We offer a variety of electronics from TV's, Game Consoles, Laptops, Tablets &
            Cellphones. All of our products are new and open box items and come with store warranty. We also offer "No
            Credit Check" financing to our customers. You will be able to take anything home for $0 down. We also do
            Iphone and computer repair! We will not be beat on price!</p>
        <p align="justify">You can buy a $200 48 inch HGTV brand new. Or a 60 in open box for 350. All sales are final
            but if you return something in the first one or two days they will work with you. I bought four TVs here and
            never had problems with any of them. The service is kickback personable and helpful. Great alternative to
            the big box stores. Limited selection of course, for obvious reasons. They have TV repair as well. Prices
            are very good they offering $89 coupon for mounting services.</p>
    </div>

@endsection
