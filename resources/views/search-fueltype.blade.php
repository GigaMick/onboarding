@extends('layouts.app')

@section('content')
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
        <a class="card card--half" href='/search/Petrol'>
            <h3 class="card__title">Petrol</h3>
        </a>

        <a class="card card--half" href='/search/Diesel'>
            <h3 class="card__title">Diesel</h3>
        </a>

        <a class="card card--half" href='/search/Electric'>
            <h3 class="card__title">Electric</h3>
        </a>

        <a class="card card--half" href='/mycar'>
            <h3 class="card__title">No preference</h3>
        </a>
    </div>
</div>

<footer class="footer">
    <a href="/search/car-type" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a>
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>
@endsection
