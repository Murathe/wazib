@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Session::get('is_logged_in') == TRUE)
                    Uko ndaani ndaaaani ndani kabisa!
                    <!-- You are logged in! -->
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