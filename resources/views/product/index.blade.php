@extends('layouts.app')

@section('content-title', 'Products')
@section('content-subtitle', 'All')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Product Management</h3>
      </div>
        <div class="box-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success my-success-msg">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <!-- Apply any bg-* class to to the info-box to color it -->


                <div class="col-md-3 col-md-offset-9">
                    <a href="{{url('add-product')}}"><button class="btn btn-success">+ Add Product</button></a>
                </div>

            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Reorder Level</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->reorder_level }}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
