@extends('layouts.app')
@section('content')
<div class="container mt-10">
  <div class="row">
    <div class="col-sm-2 col-xs-1 col-md-1">
    </div>
    <div class="col-sm-3 col-md-5 col-xs-12">
      <div class="landing card">
        <img class="card-img-top img-responsive" src="img/manager.svg" alt="Card image cap">
        <div class="card-body text-center">
          <a href="{{ route('login') }}"><button class="btn btn-outline-info">Wazi Admin</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-5 col-xs-12">
      <div class="landingc card">
        <img class="card-img-top img-responsive" src="img/consult.svg" alt="Card image cap">
        <div class="card-body">
          <button class="btn btn-outline-info">Service Provider</button>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-xs-1 col-md-1">
    </div>
  </div>
  @endsection
