@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Display Therapists</div>

                <div class="panel-body">
                @foreach ($therapists as $therapist)
                <div class="panel-heading">
                    <div class="panel-btns">
                    </div><!-- panel-btns -->
                    <h3 class="panel-title nomargin">{{ $therapist->therapists_name }}</h3>
                    <p class="nomargin">{{ $therapist->therapists_email }} <span class="to-uppercase"><strong> | {{ $therapist->therapists_categories }}</strong></span>  </p>
                </div>
                @endforeach
                </div>
            </div>
            <a href="/addTherapist" class="btn btn-primary btn-block">Add New Therapist</a>
        </div>
    </div>
</div>
@endsection
