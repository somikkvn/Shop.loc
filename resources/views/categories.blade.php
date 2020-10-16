@extends('layouts.layout')
@section('title')
    All Products
@endsection

@section('main_content')

    <navbar-component></navbar-component>
    <masonry-img :categories="{{$categories}}"></masonry-img>
{{--    <categories></categories>--}}

@endsection
