@extends('templates.master')

@section('title')
    All Products
@stop

@section('content')

  <h2>All Products</h2>

  <div id='product-index'>
    @foreach($products as $product)
      <a href='/product?id={{ $product['id']}}'>
      <div class='product'>
        <div class='product-name'>{{ $product['name']}}</div>
        <img class='product-thumb' src="/images/products/{{ $product['id'] }}.jpg"
      </div>
    @endforeach
  </div>

  <div>
    <a href='/products/new'> Add new product</a>
  </div>
@endsection
