@extends('layouts.layout')
@section('title')
    Categories
@endsection

@section('main_content')

<navbar-component></navbar-component>

<h1 align="center">Категории товаров</h1>

    @foreach($categoryObject as $category)

        <h1 align="center"><a href="/category/{{$category->code}}">Категория: {{$category->code}}</a></h1>

    @endforeach

@endsection
