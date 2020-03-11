@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Save Therapist</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/addNewTherapistToDB">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Therapist Name</label>
                            <div class="col-md-6">
                                <input id="therapist_name" type="text" class="form-control" name="therapist_name" value="{{ old('therapist_name') }}" required autofocus>
                                @if ($errors->has('therapist_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('therapist_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Therapist Email</label>
                            <div class="col-md-6">
                                <input id="therapist_email" type="email" class="form-control" name="therapist_email" value="{{ old('therapist_name') }}" required autofocus>
                                @if ($errors->has('therapist_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('therapist_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                                <input id="therapist_category" type="text" class="form-control" name="therapist_category" required>

                                @if ($errors->has('therapist_category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('therapist_category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Therapist
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
