@extends('admin-lte::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('admin-lte::layouts.content-wrapper.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATOR</li>
  <li class="active">
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>Home</span>
    </a>
  </li>
    <li class="active">
        <a href="{{ route('products') }}">
            <i class="fa fa-cutlery"></i>
            <span>Manage Product</span>
        </a>
    </li>
    <li class="active">
        <a href="{{ route('sales-reps') }}">
            <i class="fa fa-user"></i>
            <span>Manage Sales Reps</span>
        </a>
    </li>
    <li class="active">
        <a href="{{ route('home') }}">
            <i class="fa fa-sticky-note-o "></i>
            <span>GRN</span>
        </a>
    </li>
    <li class="active">
        <a href="{{ route('home') }}">
            <i class="fa fa-sticky-note "></i>
            <span>Sales</span>
        </a>
    </li>
</ul>
@endsection
