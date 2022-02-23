@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            
        <div class="col-md-8">
            
            <h2 class="mb-3">{{$product -> title}}</h2>  
            
            <a href="/dashboard/products/" class="badge bg-success"><span data-feather="arrow-left"></span>Back to Product</a>
            <a href="#" class="badge bg-danger"><span data-feather="x-circle"></span>Delete</a>
            
            @if($product -> image)
            <div class="max-height: 289 px; overflow:hidden">
                <img src="{{ asset('storage/' . $product -> image) }}" alt="{{ $product-> category-> name }}" class="img-fluid mt-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $product-> category-> name}}" alt="{{ $product-> category-> name }}" class="img-fluid mt-3">
            @endif
            
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