@extends('templates.master')

@section('title')
    Add New Product
@stop

@section('content')
<form method='POST' id='add-new-product' action='/products/addNewProduct'>
      <h3>Add New Product</h3>

      <div class='form-group'>
          <label for='name'>Name</label>
          <input type='text' class="form-control" name='name' id='name' value='{{ $app->old('name') }}'>
      </div>

      <div class='form-group'>
          <label for='description'>Description</label>
          <textarea name='description' id='description' class='form-control'>{{ $app->old('description') }}</textarea>
      </div>

      <div class='form-group'>
          <label for='price'>Price</label>
          <input type='number' class="form-control" name='price' id='price' value='{{ $app->old('price') }}'>
      </div>

      <div class='form-group'>
          <label for='available'>Available</label>
          <input type='number' class="form-control" name='available' id='available' value='{{ $app->old('available') }}'>
      </div>

      <div class='form-group'>
          <label for='weight'>Weight</label>
          <input type='number' class="form-control" name='weight' id='weight' value='{{ $app->old('weight') }}'>
      </div>

      <div class='form-group'>
          <label for='perishable'>Perishable</label>
          <input type='boolean' class="form-control" name='perishable' id='perishable' value='{{ $app->old('perishable') }}'>
      </div>


      <button type='submit' class='btn btn-primary'>Add Product</button>
@endsection
