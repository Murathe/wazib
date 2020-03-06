@extends('layouts.app')

@section('title', $title)

@section('body')
    {{-- <!-- Card --> --}}
    <div class="card" style="width: 50%;">

        {{-- <!-- Card content --> --}}
        <div class="card-body">

            {{-- <!-- Title --> --}}
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Add Image Content</strong>
            </h5>
            <h4 class="card-title"><a></a></h4>
            {{-- <!-- Text --> --}}
            <div class="card-text">
                <form class="text-center" style="color: #757575;" action="images" method="POST">
                    {{-- field1 --}}
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                    <div class="md-form">
                        <input type="text" id="inputImageName" name="imageName" class="form-control">
                        <label for="inputImageName">Image Name</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="inputDescription" name="description" class="form-control">
                        <label for="inputDescription">Breif Description</label>
                    </div>

                    <div class="md-form" style="text-align:left;">
                        <input type="file" id="inputImage" name="image">
                    </div>
                    <div>
                        {{-- <!-- Button --> --}}
                        <button type="submit" id="Submit" name="submit" class="btn btn-info btn-rounded">Post</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    {{-- <!-- Card --> --}}
@endsection