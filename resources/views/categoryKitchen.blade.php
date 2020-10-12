@extends('layouts.layout')
@section('title')
    Kitchen
@endsection

@section('main_content')

    <navbar-component></navbar-component>

    <masonry-img :categories="{{$categories}}"></masonry-img>

@endsection
