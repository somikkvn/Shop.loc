@extends('layouts.layout')

@section('title')
    Cart
@endsection

@section('main_content')

<navbar-component></navbar-component>
<cart :categories='@json($categories)'></cart>

@endsection

