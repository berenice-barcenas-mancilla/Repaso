@extends('layouts.app')
@section('titulo', 'Welcome')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"aria-current="true" aria-label="Slide 1">
            </button>
            
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"aria-label="Slide 2">
            </button>
            
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"aria-label="Slide 3">
            </button>

            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"aria-label="Slide 4">
            </button>

            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"aria-label="Slide 5">
            </button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item ">
                <img src="images/1.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="images/5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/4.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
