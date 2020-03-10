@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection


@section('content')
        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="">
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Vedio Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputVedio_name" name="Vedio_name" placeholder="Vedio_name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputUser" class="col-sm-2 col-form-label">Video Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDescription" name="descriotion" placeholder="Video_description">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                
                {{-- <input type="image" class="form-control" id="inputImage" name="image" placeholder="image"> --}}
                {{-- <img class="col-sm-6" id="preview"  src=""> --}}
              </div>

            </div>
            {{-- <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
              </div>
            </div> --}}
        </form>
    </div>
    
    
@endsection
