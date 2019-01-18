@extends('layouts.app')

@section('content')
<header class="header">
    <a href="/"><img class="header__logo" src="../images/logo.png"></a>
    <img class="header__menu" src="../images/menu.png">
</header>

<div class="stepper">
    <p>Find a vehicle</p>
    <p>Step 2 of 4</p>
</div>

<div class="container">
    <img class="icon" src="../images/car-size.png">
    <h2 class="title">Choose your preferred car size</h2>

    <div class="grid">
        <a class="card card--half" href='/size/{{$fueltype}}/large'>
            <h3 class="card__title">Large</h3>
            <p class="card__sub">(SUV, Estate etc)</p>
        </a>

        <a class="card card--half" href='/size/{{$fueltype}}/medium'>
            <h3 class="card__title">Medium</h3>
            <p class="card__sub">(Saloons, <span class="nowrap">Coupés etc)</span></p>
        </a>

        <a class="card card--half" href='/size/{{$fueltype}}/small'>
            <h3 class="card__title">Small</h3>
            <p class="card__sub">(Hatchbacks)</p>
        </a>

        <a class="card card--half" href='/mycar'>
            <h3 class="card__title">I don't care</h3>
        </a>
    </div>
</div>

<p class="choices">Choices so far: {{$fueltype}}</p>

<footer class="footer">
    <a href="/search/budget" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a>
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>
@endsection
