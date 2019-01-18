@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<header class="header">
    <a href="/"><img class="header__logo" src="../images/logo.png"></a>
    <img class="header__menu" src="../images/menu.png">
</header>

<div class="stepper">
    <p>Find a vehicle</p>
    <p>Step 1 of 4</p>
</div>

<div class="container">
    <img class="icon" src="images/fuel-type.png">
    <h2 class="title">Choose your preferred fuel type</h2>

    <div class="grid">
        <a class="card card--half" href='/search/petrol'>
            <h3 class="card__title">Petrol</h3>
        </a>

        <a class="card card--half" href='/search/diesel'>
            <h3 class="card__title">Diesel</h3>
        </a>

        <a class="card card--half" href='/search/electric'>
            <h3 class="card__title">Electric</h3>
        </a>

        <a class="card card--half" href='/mycar'>
            <h3 class="card__title">No preference</h3>
        </a>
=======
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center mb-2'>
                <h3>Choose Fuel type</h3>
            </div>
        </div>

        <div class='row'>
            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/search/Petrol'>
                        <h5 class='text-dark'>Petrol</h5>
                    </a>
                </div>
            </div>

            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/search/Diesel'>
                        <h5 class='text-dark'>Diesel</h5>
                    </a>
                </div>
            </div>
            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/search/Electric'>
                        <h5 class='text-dark'>Electric</h5>
                    </a>
                </div>
            </div>
            <div class='col-12 mb-4'>
                <div class='p-2 d-flex align-items-center justify-content-center'>
                    <a href='/mycar'>
                        <h5 class='text-dark'>I don't care</h5>
                    </a>
                </div>
            </div>
        </div>
>>>>>>> f6b1f11f4f39791e34ba351df3d166a48958007c
    </div>
</div>

<footer class="footer">
    <a href="/search/car-type" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a>
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>
@endsection
