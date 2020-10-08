@extends('layouts.layout')
@section('title')
    Categories
@endsection

@section('main_content')

<navbar-component></navbar-component>

<massonry-component :categories="{{$categories}}"></massonry-component>

@endsection
