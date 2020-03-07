@extends('layouts.app')

@section('title', $title)

@section('body')

    {{-- MODAL SECTION --}}
    <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header text-center" style="color:black;">
                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Add Image Content</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                
                <!--Body-->
                {{-- <!-- Card --> --}}
                <div class="card" style="">
                
                    {{-- <!-- Card content --> --}}
                    <div class="card-body">
                
                        {{-- <!-- Title --> --}}
                        {{-- <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Add Image Content</strong>
                        </h5> --}}
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
                                <div class="modal-footer justify-content-center">
                                    {{-- <!-- Button --> --}}
                                    <button type="submit" id="Submit" name="submit" class="btn btn-deep-orange btn-rounded">Post</button>
                                </div>
                            </form>
                        </div>
                
                    </div>
                
                </div>
                {{-- <!-- Card --> --}}

                <!--Footer-->
                {{-- <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-deep-orange waves-effect">Send <i class="fas fa-paper-plane-o ml-1"></i></a>
                </div> --}}
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#orangeModalSubscription">Launch
          modal Subscription</a>
      </div>
@endsection