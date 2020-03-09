@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-5">
      <div class="landingc card">

        <!-- Card image -->
        <img class="card-img-top" src="img/consult.svg" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">
          <!-- Button -->
          <button class="btn btn-danger">Service Provider</button>
        </div>

      </div>
    </div>
    <div class="col-md-5">
      <div class="landingc card">

        <!-- Card image -->
        <img class="card-img-top" src="img/unauthorized-person.svg" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">
          <!-- Button -->
          <button class="btn btn-success">Wazi Amin</button>
        </div>
      </div>
    </div>
    <div class="col-md-1">

    </div>
  </div>
  @endsection