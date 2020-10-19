@extends('layouts.layout')
@section('title')
    All Products
@endsection

@section('main_content')

    <navbar-component></navbar-component>
    <h1 align="center">All products</h1>
    <masonry-img :categories="{{$categories}}"></masonry-img>

@endsection
