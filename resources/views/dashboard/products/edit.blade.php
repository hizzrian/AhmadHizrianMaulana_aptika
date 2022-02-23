@extends('dashboard.layouts.main')

@section('container')

<div class="col-md-8 mt-3">
    <h2>Edit Product</h2>
</div>
<div class="align-self-stretch">
    <form method="post" action="/dashboard/products/{{$product->slug}}" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label ">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old ('title',$product->title)}}" >
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old ('slug',$product->slug)}}">
      </div>
      <div class="mb-3">
        <label for="sku" class="form-label">sku</label>
        <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" value="{{ old ('sku',$product->sku)}}">
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach($categories as $category)   
            @if(old('category_id', $product->category_id) == $category->id)       
              <option value="{{  $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{  $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid @enderror">Chose Image</label>
        @if($product->image)
        <img src="{{ asset('storage/'. $product->image)}}"class="img-preview img-fluid">
        @else
        <img class="img-preview img-fluid">
        @endif
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
      </div>
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="mb-3">
        <label for="description" class="form-label">description</label>
          <input id="description" type="hidden" name="description" value="{{ old ('description',$product->description)}}">
          <trix-editor input="description"></trix-editor>
      </div>
      <div class="mb-3">
        <label for="weight" class="form-label">Berat</label>
        <select class="form-select" name="weight">
          <option value="0">Pilih Berat</option>
          <option value="1">/Kg</option>
          <option value="2">/Liter</option>
        </select>
      </div>
     
      <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="price" name="price" value="{{ old ('price',$product->price)}}">
      </div>
      <div class="mb-3">
        <label for="discount" class="form-label">Discount</label>
        <input type="text" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{ old ('discount',$product->discount)}}">
        <div class="mb-3">
      </div>
        <label for="discount_price" class="form-label">Harga Setelah diskon</label>
        <input type="text" class="form-control" id="discount_price" name="discount_price">
      </div>

      <button type="submit" class="btn btn-primary">Edit Product</button>
    </form>
</div>
   <script>
           function previewImage(){
           const image = document.querySelector('#image');
           const imgPreview = document.querySelector('.img-preview');
    
           imgPreview.style.display = 'block';
    
           const oFReader = new FileReader();
           oFReader.readAsDataURL(image.files[0]);
    
            oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
            }
         }
     //count percentage
     const price = document.querySelector('#price');
     const discount = document.querySelector('#discount');
      const discount_price = document.querySelector('#discount_price');
      discount.addEventListener('keyup', function(){
        const discount_value = discount.value;
        const price_value = price.value;
        const discount_price_value = (discount_value/100)*price_value;
        const total_price = price_value - discount_price_value;
        discount_price.value = total_price;
      });


     document.addEventListener('trix-file-accept', function(e){
       e.preventDefault();
     });
   </script>
@endsection