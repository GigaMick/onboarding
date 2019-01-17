@extends('layouts.app')

@section('content')
<div class="stepper">
    <p>Find a vehicle</p>
    <p>Step 2 of 4</p>
</div>

<div class="container">
    <img class="icon" src="https://via.placeholder.com/150x150">
    <h2 class="title">Choose your preferred car size</h2>
    <p class="choices">Choices so far: {{$fueltype}}</p>

    <div class="grid">
        <a class="card card--half" href='/size/large'>
            <h3 class="card__title">Large (SUV, Estate etc)</h3>
        </a>

        <a class="card card--half" href='/size/medium'>
            <h3 class="card__title">Medium (Saloons, coupes etc)</h3>
        </a>

        <a class="card card--half" href='/size/small'>
            <h3 class="card__title">Small (Hatchbacks)</h3>
        </a>

        <a class="card card--half" href='/mycar'>
            <h3 class="card__title">I don't care</h3>
        </a>
    </div>
</div>

<footer class="footer">
    <a href="/search" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a>
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>
@endsection
