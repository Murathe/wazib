@extends('layouts.app')

@section('title', $title)

@section('body')
    {{-- table --}}
    <div class="row" style="">
        <!-- Table with panel -->
        <div class="card card-cascade narrower" style="width:100%;">

            {{-- @foreach($imageContents as $data) --}}

            <!--Card image-->
            <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center" style="">
        
                <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-th-large mt-0"></i>
                    </button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-columns mt-0"></i>
                    </button>
                </div>
            
                <div class="white-text mx-3">Table name</div>
            
                <div>
                    <button type="submit" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-pencil-alt mt-0"></i>
                    </button>
                    <button type="submit" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="far fa-trash-alt mt-0"></i>
                    </button>
                    <button type="submit" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-info-circle mt-0"></i>
                    </button>
                </div>
        
            </div>
            <!--/Card image-->
        
            <div class="px-4">
        
            <div class="table-wrapper">
                <!--Table-->
                <table class="table table-hover mb-0">
        
                <!--Table head-->
                <thead>
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkbox" hidden>
                            <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                        </th>
                        <th class="th-lg">
                            <a>Title
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Description
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Created_time
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <!--Table head-->
        
                <!--Table body-->
                <tbody>
                    @foreach($imageContents as $data)
                    <tr>
                        <th scope="row">
                            <input class="form-check-input" type="checkbox" id="checkbox1" name="contId" value="{{$data['id']}}">
                        <label class="form-check-label" for="checkbox1" class="label-table"></label>
                        </th>
                        <td>{{ $data['title'] }}</td>
                        <td>{{ $data['description'] }}</td>
                        <td>{{ $data['created_at'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <!--Table body-->
                </table>
                <!--Table-->
            </div>
        
            </div>
        
        </div>
    <!-- Table with panel -->
    </div>
    {{-- end table --}}
    

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
                            <form class="text-center" style="color: #757575;" action="images/store" method="POST" enctype="multipart/form-data">
                                {{-- field1 --}}
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                {{ csrf_field() }}
                                <div class="md-form">
                                    <input type="text" id="inputContentName" name="title" class="form-control">
                                    <label for="inputContentName">Title</label>
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