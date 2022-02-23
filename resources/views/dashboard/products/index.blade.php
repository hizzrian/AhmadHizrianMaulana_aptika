@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
</div>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<div class="table-responsive">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create New Product</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tittle</th>
              <th scope="col">Stock</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form method="post" action="/dashboard/products/{{ $product->slug }}" class="d-inline">
                        @method('delete')
                        @csrf
                      <button type="submit" class="badge bg-danger border-0" onClick="return confirm('Are u sure?')"><span data-feather="trash"></span></button>
                    </form>

                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection