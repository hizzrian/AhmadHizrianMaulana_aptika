@extends('layouts.main')

@section('container')
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

@endsection