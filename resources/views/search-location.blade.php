
@extends('layouts.app')

@section('content')
<header class="header">
    <a href="/"><img class="header__logo" src="../images/logo.png"></a>
    <img class="header__menu" src="../images/menu.png">
</header>

<div class="stepper">
    <p>Find a car</p>
    <p>Step 4 of 4</p>
</div>

<div class="container">
    <img class="icon" src="../images/location.png">
    <h2 class="title">Choose your location</h2>

    <form class='d-flex align-items-center justify-content-center flex-column' action="/summary" method='post'>
        @csrf
        <label>Enter your postcode</label>
        <input type="text" name='postcode' class='ch-form__control input input--margin' placeholder='Enter Postcode'>
        <label>Enter the max distance</label>
        <input type="number" name='distance' class='ch-form__control input' placeholder='Enter Distance'>
        <input type="hidden" name='budget' value='{{$budget}}'>
        <input type="hidden" name='fueltype' value='{{$fuel}}'>
        <input type="hidden" name='size' value='{{$size}}'>
        <input class='ch-btn ch-btn--block ch-btn--success' type='submit' value='Submit'>
    </form>
    <form action="/summary" method='post'>
        @csrf
        <input type="hidden" name='fueltype' value='{{$fuel}}'>
        <input type="hidden" name='distance' value='0'>
        <input type="hidden" name='budget' value='{{$budget}}'>
        <input type="hidden" name='postcode' value='0'>
        <input type="hidden" name='size' value='{{$size}}'>
        <!-- <input class='btn btn-block btn-info text-light py-3' type='submit' value="I Don't Care"> -->
    </form>
</div>

<p class="choices">Choices so far:  {{$fuel}}, {{$size}}</p>

<footer class="footer">
    <!-- <a href="/search/location" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a> -->
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>

@endsection
