@extends('layouts.layout')
@section('title')
    Coffee
@endsection

@section('main_content')

    <navbar-component></navbar-component>

    <masonry-img :categories="{{$categories}}"></masonry-img>

@endsection
