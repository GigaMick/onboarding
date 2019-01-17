@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-6'>
            <div class='card p-5 d-flex align-items-center justify-content-center'>
                <a href='/search'>
                    <h5 class='text-dark'>Find a car</h5>
                </a>
            </div>
        </div>

        <div class='col-6'>
            <div class='card p-5 d-flex align-items-center justify-content-center'>
                <a href='/mycar'>
                    <h5 class='text-dark'>My Car</h5>
                </a>
            </div>
        </div>
    </div>
    <div class='row text-center mt-5'>
        <div class='col-4'>
            <a href='/abyc'>Sell my car</a>
        </div>
        <div class='col-4'>
            <a href='/abyc'>Customer Service</a>

        </div>
        <div class='col-4'>
            <a href='/abyc'>Skip</a>

        </div>
    </div>

</div>

@endsection
