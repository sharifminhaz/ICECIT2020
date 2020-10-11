@extends('layouts.app')

@section('content')
    <div style="min-height: 80rem; padding-top: 0px;">

        <div class="contain" style="padding-top: 20px; padding-left: 0rem; ">
            <div class="row abtr">
                <div class="col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 sImg" src="/fig/MG.jpeg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Khulna University Main Gate</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 sImg" src="/fig/SM.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Shaheed Minar</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 sImg" src="/fig/kotka.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kotka Monument</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 sImg" src="/fig/lake.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Khulna University Lake</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 sImg" src="/fig/01.JPG" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>ICCIT Conference 2013</h5>
                                </div>
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3> Important Dates:</h3>
                    <h4>Coming Soon</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
