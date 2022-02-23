@extends('layouts.main')

@section('container')
	<h1 class="mb-3 text-center">{{ $title }}</h1>

	<div class="row justify-content-center mb-3">
		<div class="col-md-6">
			<form action="/products">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
				<button class="btn btn-outline-secondary" type="submit">Search</button>
			</div>
			</form>
		</div>
	</div>

	@if($products->count())
	
	<div class="card mb-3">
			@if($products[0] -> image)
            
                <img src="{{ asset('storage/' . $products[0] -> image) }}" alt="{{ $products[0]-> category-> name }}" class="img-fluid mt-3">
            
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $products[0]-> category-> name}}" alt="{{ $products[0]-> category-> name }}" class="img-fluid mt-3">
            @endif
		<div class="card-body text-center">
			<h3 class="card-title"><a href="/products/{{ $products[0]-> slug}}" class="text-decoration-none text-dark">{{ $products[0]->title }}</a></h3>
			<p>
				<small class="text-muted">
				Post by: <a href="/authors/{{ $products[0]->user->username }}" class="text-decoration-none">{{ $products[0]->user->name }}</a> Category: <a href="/	categories/{{ $products[0]-> category-> slug}} "class="text-decoration-none" >{{ $products[0]->category->name }}</a> {{ $products[0]->created_at->diffForHumans() }}
				</small>
			</p>
			<p class="card-text">{{ $products[0]->mini_description }}</p>
			<a href="/products/{{ $products[0]->slug }}" class="btn btn-primary">Read More</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach ($products->skip(1) as $product)
			<div class="col-md-4 mb-3">		
				<div class="card">
					<div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7)"><a href="#" class="text-white text-decoration-none">
						{{ $product->category->name }}
						</a>
					</div>
					@if($product -> image)
						
							<img src="{{ asset('storage/' . $product -> image) }}" alt="{{ $product-> category-> name }}" class="img-fluid mt-3">
						
					@else
						<img src="https://source.unsplash.com/500x400?{{ $product-> category-> name}}" alt="{{ $product-> category-> name }}" class="img-fluid mt-3">
					@endif
					<!-- <img src="https://source.unsplash.com/500x400?{{ $product-> category-> name}}" class="card-img-top" alt="{{ $product->category->name }}"> -->
					<div class="card-body">
					<h6 class="card-title small mb-0">Rp. {{ $product -> price }}</h6>
					<div class="text-xs text-gray-500 fw-bold mb-0 position-relative">
                            Perubahan Harga: Rp. {{ $product-> discount_price}}
                        <span class="badge bg-success position-absolute end-0">
                                        {{ $product->discount }}%
                        </span>
                        </div>
                    <div class="text-xs text-gray-500">
                        Harga Terbaru: {{ $product->updated_at->format('d-m-Y') }}
                	</div>
					<!-- <a href="/products/{{ $product -> slug }}" class="btn btn-primary">Read more</a> -->
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	@else
	<p class="text-center fs-4">No Post found</p>
	@endif
	<div class="d-flex justify-content-center">
		{{ $products->links() }}
	</div>
@endsection