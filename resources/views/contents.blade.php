@extends('layouts.app')

@section('title', $title)

@section('body')
    {{-- {{ $data }} --}}
    {{-- <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button> --}}


    {{-- <!-- Card --> --}}
    <div class="card">

        {{-- <!-- Card content --> --}}
        <div class="card-body">
    
            {{-- <!-- Title --> --}}
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Add Image Content</strong>
            </h5>
            <h4 class="card-title"><a></a></h4>
            {{-- <!-- Text --> --}}
            <div class="card-text">
                <form class="text-center" style="color: #757575;" action="#!">
                    {{-- field1 --}}
                    <div class="md-form">
                        <input type="text" id="inputMDEx" class="form-control">
                        <label for="inputMDEx">Image Name</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="inputMDEx" class="form-control">
                        <label for="inputMDEx">Breif Description</label>
                    </div>

                    <div class="md-form">
                        <div class="btn btn-primary btn-md">
                          <input type="file">
                        </div>
                        {{-- <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div> --}}
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary">Button</button>
                    </div>
                    {{-- <!-- Button --> --}}
                </form>
            </div>
    
        </div>
    
    </div>
    {{-- <!-- Card --> --}}
@endsection