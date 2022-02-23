@extends('layouts.main')
@section('container')
<h1>Post Category:{{ $category }}</h1>
	@foreach ($products as $product)
	<article>
		<img src="{{ $product -> image }}" alt="{{ $product -> title  }}">
		<h2>
			<a href="/products/{{ $product -> slug }}">{{ $product -> title }}</a>
		</h2>
		<p>{{ $product->price }}</p>
		<p>{{ $product->mini_description }}</p>
		<!-- <p><button>Call For Price</button></p> -->
	</article>
	@endforeach
@endsection