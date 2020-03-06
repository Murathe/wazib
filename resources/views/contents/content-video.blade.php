@extends('layouts.app')

@section('title', $title)

@section('body')
    {{-- <!-- Card --> --}}
    <div class="card" style="width: 50%;">

        {{-- <!-- Card content --> --}}
        <div class="card-body">

            {{-- <!-- Title --> --}}
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Add Video Content</strong>
            </h5>
            <h4 class="card-title"><a></a></h4>
            {{-- <!-- Text --> --}}
            <div class="card-text">
                <form class="text-center" style="color: #757575;" action="#!" method="post">
                    {{-- field1 --}}
                    <div class="md-form">
                        <input type="text" id="inputImageName" class="form-control">
                        <label for="inputImageName">Image Name</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="inputDescription" class="form-control">
                        <label for="inputDescription">Breif Description</label>
                    </div>

                    <div class="md-form" style="text-align:left;">
                        <input type="file" id="inputImage">
                    </div>
                    <div>
                        {{-- <!-- Button --> --}}
                        <button type="button" class="btn btn-info btn-rounded">Post</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    {{-- <!-- Card --> --}}
@endsection