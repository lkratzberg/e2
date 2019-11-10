@extends('templates.master')

@section('title')
    Product Not Found
@stop

@section('content')

  <h2>Product 99 not found</h2>

  <p class='product-description'>
    Uh oh - we were not able to find the product you were looking for.
  </p>

  <a href='/products'>Check out our other products...</a>
@endsection
