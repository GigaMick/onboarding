@extends('layouts.app')

@section('content')
<header class="header">
    <a href="/"><img class="header__logo" src="../../images/logo.png"></a>
    <img class="header__menu" src="../../images/menu.png">
</header>

<div class="stepper">
    <p>Find a car</p>
    <p>Step 3 of 4</p>
</div>

<div class="container">
    <img class="icon" src="../../images/budget.png">
    <h2 class="title">Choose your maximum budget</h2>

    <div class="grid grid--full">
        <form action="/search-budget" method='post'>
            @csrf
            <label>Enter the maximum amount you want to spend</label>
            <input type="number" name='budget' class="ch-form__control input" placeholder='Enter Max Spend'>
            <input type="hidden" name='fueltype' value='{{$fuel}}'>
            <input type="hidden" name='size' value='{{$size}}'>
            <input class="ch-btn ch-btn--block ch-btn--success" type='submit' value='Submit'>
        </form>
    </div>
</div>

<p class="choices">Choices so far:  {{$fuel}}, {{$size}}</p>

<footer class="footer">
    <!-- <a href="/search/location" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a> -->
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>

@endsection
