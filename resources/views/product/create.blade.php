  @extends('layouts.app')

  @section('content-title', 'Product')
  @section('content-subtitle', 'add')

  @section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Add Product</h3>
        </div>
        <div class="box-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
          @endif
          <!-- Apply any bg-* class to to the info-box to color it -->

            <div class="row">
                <div class="well">

                    {!! Form::open(['route' => 'save-product', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                    <fieldset>

                        <legend>New Product</legend>

                        <!-- Product Name -->
                        <div class="form-group">
                            {!! Form::label('Product Name', 'Product Name:', ['class' => 'col-md-offset-2 col-md-2 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('product_name', null, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}
                            </div>
                        </div>

                        <!-- Product Price -->
                        <div class="form-group">
                            {!! Form::label('Product Price', 'Price:', ['class' => 'col-md-offset-2 col-md-2 control-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Product Price']) !!}
                            </div>
                        </div>

                        <!-- Rate -->
                        <div class="form-group">
                            {!! Form::label('Reorder Level', 'Reorder Level', ['class' => 'col-md-offset-2 col-md-2 control-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::text('reorder_level', null, ['class' => 'form-control', 'placeholder' => 'Reorder Level']) !!}
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                            </div>
                        </div>

                    </fieldset>

                    {!! Form::close()  !!}
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
