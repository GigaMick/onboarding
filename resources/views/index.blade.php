@extends('layouts.app')

@section('content')
<div class="hero">
    <h1 class="hero__title">Let's find your <span class="nowrap">next car</span></h1>
    <p class="hero__intro">Search 33,114 used cars at <span class="nowrap">the UK’s</span> number 1 dealer website</p>
    <a href="/" class="ch-btn ch-btn--success hero__button">Success button</a>
</div>

<div class="container">
    <div class="grid">
        <a class="card" href='/search'>
            <h5 class='text-dark'>My Car</h5>
        </a>
    </div>
</div>

@endsection
