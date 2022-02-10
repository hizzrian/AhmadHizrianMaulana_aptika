
@extends('layouts.main')

@section('container')
    <article>
    <img src="{{ $product["image"] }}" alt="{{ $product["title"]  }}">
    <h2>{{$product["title"]}}</h2>  
    <p>{{ $product["code"] }}</p>  
    <p>{{ $product["description"] }}</p>
    <p>{{ $product["price"] }}</p>
    <p>{{ $product["height"] }}</p>
    <p>{{ $product["stock"] }}</p>
    </article>
@endsection