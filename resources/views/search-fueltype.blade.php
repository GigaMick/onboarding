@extends('layouts.app')

@section('content')
<div class="stepper">
    <p>Find a vehicle</p>
    <p>Step 1 of 4</p>
</div>

<div class="container">
    <img class="icon" src="https://via.placeholder.com/150x150">
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
    </div>
</div>

<footer class="footer">
    <a href="/search" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a>
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>
@endsection
