@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <!-- Card -->
                    <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        
                        <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Therapist Name:: Joyce Mungai</h4>
                        <!--Text-->
                        <p class="card-text">Specialty: Relationship Expert</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">View Therapist Details</button>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Session::get('is_logged_in') == TRUE)
                    You are logged in!
                    @else
                    You are Logged Out!
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<!--Try build a simple admin dashboard-->
<div>
    
</div>
@endsection