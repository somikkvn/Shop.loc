@extends('layouts.layout')
@section('title')
    Categories
@endsection

@section('main_content')

<navbar-component></navbar-component>

<h1 align="center">Product categories</h1>

<table align="center">
    <tr>
    @foreach($categoryObject as $category)
          <td align="center">
           <a style="padding: 10px" href="/category/{{$category->code}}">
           <img src="https://www.david-tec.com/global/media/getacategoriesmigration/thumbnail.png"><h4>Category: {{$category->code}}</h4></a>
        </td>
    @endforeach
    </tr>
</table>

@endsection
