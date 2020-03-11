@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class=" sm-0 col-md-2 xs-0">
    </div>
    <div class="col-sm-6">
      <div class="landingc card">

        <!-- Card image -->
        <img class="card-img-top" src="img/manager.svg" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">
          <!-- Button -->
          <a href="{{ route('login') }}"><button class="btn btn-outline-info">Wazi Admin</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="landingc card">

        <!-- Card image -->
        <img class="card-img-top" src="img/consult.svg" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">
          <!-- Button -->
          <button class="btn btn-outline-info">Service Provider</button>
        </div>

      </div>
    </div>
    <div class="sm-0 xs-0 col-md-2">

    </div>
  </div>
  @endsection