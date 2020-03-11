@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- Card -->
      <div class="card col-sm-6 col-md-4">

        <!-- Card image -->
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title"><a>Card title</a></h4>
          <!-- Text -->
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <!-- Button -->
          <a href="#" class="btn btn-primary">Button</a>

        </div>

      </div>
      <!-- Card -->
      <div class="service card">
        <button class="btn btn-danger">Service Provider</button>
        <button class="btn btn-success">Wazi Amin</button>
      </div>

    </div>
  </div>
</div>
@endsection
