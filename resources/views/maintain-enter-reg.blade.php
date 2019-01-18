@extends('layouts.app')

@section('content')
<header class="header">
    <a href="/"><img class="header__logo" src="../../images/logo.png"></a>
    <img class="header__menu" src="../../images/menu.png">
</header>

<div class="stepper">
    <p>Enter Car Registration</p>
    <p></p>
</div>

<div class="container">
    <img class="icon" src="../../images/budget.png">
    <h2 class="title">Enter your car registration</h2>

    <div class="grid grid--full">
        <form action="/submit_reg" method='post'>
            @csrf
            {{--<label>Enter your car registration</label>--}}
            <input type="text" name='reg' class="ch-form__control input" placeholder='Enter Registration'>
            <input class="ch-btn ch-btn--block ch-btn--success" type='submit' value='Submit'>
        </form>
    </div>
</div>



@endsection
