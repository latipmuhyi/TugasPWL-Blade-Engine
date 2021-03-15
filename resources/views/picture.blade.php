@extends('layout/main')

@section('Title', 'Ini Halaman Picture')

@section('container')
{{-- Home --}}
<div class="jumbotron jumbotron-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade cc" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/image2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/image2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container">
    <div class="row por">
        <div class="col-lg-11 mx-auto">
            <div class="kotak">
                <div class="row">
                    <div class="col pp mx-auto">
                        <img src="/img/1 (1).jpg" class="prof" width="200" alt="">
                    </div>
                    <div class="col pp mx-auto">
                        <img src="/img/1 (2).jpg" class="prof" width="200" alt="">
                    </div>
                    <div class="col pp mx-auto">
                        <img src="/img/1 (3).jpg" class="prof" width="200" alt="">
                    </div>
                    <div class="col pp mx-auto">
                        <img src="/img/1 (4).jpg" class="prof" width="200" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection




