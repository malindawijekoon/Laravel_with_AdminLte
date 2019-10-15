@extends('layouts.app')

@section('content-title', 'Sales Representatives')
@section('content-subtitle', 'All')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Manage Sales Representatives </h3>
      </div>
        <div class="box-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success my-success-msg">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <!-- Apply any bg-* class to to the info-box to color it -->

                <div class="col-md-3 col-md-offset-9">
                    <a href="{{url('add-rep')}}"><button class="btn btn-success">+ Add Representatives</button></a>
                </div>

            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Commission percentage</th>
                        <th scope="col">Regidtered Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reps as $rep)
                        <tr>
                            <th scope="row">{{ $rep->id }}</th>
                            <td>{{ $rep->rep_name }}</td>
                            <td>{{ $rep->commition_rate }}</td>
                            <td>{{ date('d-m-Y', strtotime($rep->created_at)) }}</td>

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
