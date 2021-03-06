@extends('layouts.app')

@section('content')
<header class="header">
    <a href="/"><img class="header__logo" src="../images/logo.png"></a>
    <img class="header__menu" src="../images/menu.png">
</header>

<div class="hero">
    <h1 class="hero__title">Let's find your <span class="nowrap">next car</span></h1>
    <p class="hero__intro">Search 33,114 used cars at <span class="nowrap">the UK’s</span> number 1 dealer website</p>
    <a href="/search" class="ch-btn ch-btn--success hero__button">Get started</a>
</div>

<div class="container">
    <div class="grid grid--home">
        <a class="card card--primary" href='/maintain'>
            <img class="card__icon" src="images/car-size.png">
            <h3 class="card__title card__title--home">Maintain my car</h3>
            <p class="card__description">I’m looking for a service or MOT, or to book it in for something</p>
        </a>

        <a class="card" href='/search'>
            <img class="card__icon" src="images/spanner.png">
            <h3 class="card__title card__title--home">Sell my car</h3>
            <p class="card__description">Get a free instant valuation and book an appointment online in minutes</p>
        </a>

        <a class="card" href='/search'>
            <img class="card__icon" src="images/person.png">
            <h3 class="card__title card__title--home">Speak to an advisor</h3>
            <p class="card__description">Do you need some help with your car <span class="nowrap">or order?</span></p>
        </a>
    </div>
</div>

@endsection
