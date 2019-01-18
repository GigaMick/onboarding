@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center mb-2'>
                <h3>Choose Fuel type</h3>
            </div>
        </div>

        <div class='row'>
            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/search/Petrol'>
                        <h5 class='text-dark'>Petrol</h5>
                    </a>
                </div>
            </div>

            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/search/Diesel'>
                        <h5 class='text-dark'>Diesel</h5>
                    </a>
                </div>
            </div>
            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/search/Electric'>
                        <h5 class='text-dark'>Electric</h5>
                    </a>
                </div>
            </div>
            <div class='col-12 mb-4'>
                <div class='p-2 d-flex align-items-center justify-content-center'>
                    <a href='/mycar'>
                        <h5 class='text-dark'>I don't care</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection