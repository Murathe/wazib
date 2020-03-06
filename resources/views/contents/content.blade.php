@extends('layouts.app')

@section('title', $title)

@section('body')
    <div class="row">
        <div class="col-md-4" style="">
            <!-- Card -->
            <div class="card card-image"
            style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
        
            <!-- Content -->
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
                <h5 class="pink-text"><i class="fas fa-film"></i> Videos</h5>
                <h3 class="card-title pt-2"><strong>Video Contents</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                Odit sed qui, dolorum!.</p>
                <a class="btn btn-info"><i class="fas fa-film left"></i> View Contents</a>
            </div>
            </div>
        
            </div>
            <!-- Card -->
        </div>
        {{-- *************************************************************** --}}
        <div class="col-md-4">
            <!-- Card -->
            <div class="card">
        
                <!-- Card image -->
                <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>
            
                <!-- Button -->
                {{-- <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                    class="fas fa-chevron-right pl-1"></i></a>
             --}}
                <!-- Card content -->
                <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">Video Contents</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            
                </div>
            
                <!-- Card footer -->
                {{-- <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                <ul class="list-unstyled list-inline font-small">
                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                    <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                        class="far fa-comments pr-1"></i>12</a></li>
                    <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
                        </i>21</a></li>
                    <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
                </ul>
                </div> --}}
            
            </div>
          <!-- Card -->
        </div>
    </div>
@endsection