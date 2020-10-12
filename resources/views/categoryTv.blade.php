@extends('layouts.layout')
@section('title')
    Tv
@endsection

@section('main_content')

    <navbar-component></navbar-component>

    <masonry-img :categories="{{$categories}}"></masonry-img>

@endsection
