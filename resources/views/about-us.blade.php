

@extends('layouts.app')
@section('title','About us')
@section('desc','About Us - Who We Are ')

@section('content')

<div id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 page-header text-center">
                <h1>ABOUT US</h1>
                <hr/>
            </div>
        </div>
        <div class="container-fluid " id="about-us-body">
            <div class="row">
                <div id="aba" class="animated fadeInLeft col-lg-6 col-md-6 col-sm-12 col-xsm-12 text-center"
                    style="color: white;text-align: justify ;padding: 70px 5px 5px 5px; min-height:500px; background-color:#c51f1a">
                    <i class="fas fa-fingerprint" style="font-size:3em"></i>
                    <h2 class="text-center">Who we are</h2>
                    <p>Raphaeliam is an IT firm based in Nairobi, Kenya but our services and products are spread across the country.</p>
                    <i class="fas fa-hourglass-half" style="font-size:3em"></i>
                    <h2>Over 7years Expericence</h2>
                    <p>We have been in property businsess for over seven years dealing with all manner of properties
                        ranging from plots, houses, apartments for leasing,rent or sale.</p>
                    <a class="btn btn-outline-light btn-lg" href="/services">Learn More</a>
                </div>
                <div class="animated fadeInRight col-lg-6 col-md-6 col-sm-12 col-xsm-12 text-center"
                    style="color:floralwhite; text-align: center;padding: 70px 5px 5px 5px; min-height: 500px; background-color:#202326">
                    <i class="fas fa-medal" style="font-size:3em"></i>
                    <h2>We are the Best</h2>
                    <p>We are the best at what we do. Our list of clientele can ateast to that.</p>
                    <i class="far fa-money-bill-alt" style="font-size:3em"></i>
                    <h2>Pay at your Pace</h2>
                    <p>We won't rush you on property acquisation, lipa bila stress polepole.</p>

                    <a class="btn btn-outline-light btn-lg " href="/services">Learn More</a>

                </div>

            </div>

        </div>
    </div>

</div>

@include('layouts.callback')


@endsection
