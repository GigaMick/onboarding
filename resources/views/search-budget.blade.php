@extends('layouts.app')

@section('content')
<div class="stepper">
    <p>Choose budget</p>
    <p>Step 3 of 4</p>
</div>

<div class="container">
    <img class="icon" src="../images/car-size.png">
    <h2 class="title">Choose your maximum budget</h2>

    <div class="grid">
        <div class='card py-3 px-3'>
            <form class='d-flex align-items-center justify-content-center flex-column' action="/search-budget" method='post'>
                @csrf
                <label>Enter the maximum amount you want to spend</label>
                <input type="number" name='budget' class='btn-block py-2' placeholder='Enter Max Spend'>
                <input type="hidden" name='fueltype' value='{{$fuel}}'>
                <input type="hidden" name='size' value='{{$size}}'>
                <input class='btn btn-block btn-success mt-3' type='submit' value='submit'>
            </form>
        </div>
    </div>
</div>

<p class="choices">Choices so far:  {{$fuel}}, {{$size}}</p>

<footer class="footer">
    <a href="/search/location" class="ch-btn ch-btn--block ch-btn--success hero__button">Next</a>
    <a href="#"><p>I’m not sure, show me vehicles</p></a>
</footer>

@endsection
