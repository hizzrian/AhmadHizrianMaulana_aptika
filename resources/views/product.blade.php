
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            
        <div class="col-md-8">
            
            <h2 class="card-title small mb-0">{{$product -> title}}</h2>  
            
            <p>Post by: <a href="/authors/{{ $product->user->username }}">{{ $product->user->name }}</a> Category: <a href="/categories/{{ $product-> category-> slug}}">{{ $product->category->name }}</a></p>
            
            <img src="https://source.unsplash.com/1200x400?{{ $product-> category-> name}}" alt="{{ $product-> category-> name }}" class="img-fluid">
            
            <p class="mt-3">SKU: {{ $product-> code }}</p>  
            
            <p>Harga: {{ $product-> price }}</p>
            
            <p>Berat: {{ $product-> height }}</p>
            
            <p>Stock: {{ $product-> stock }}</p>

            <article class="my-3 fs-5">
                {!! $product->description !!}
            </article>

            </div>
        </div>
    </div>
    
@endsection