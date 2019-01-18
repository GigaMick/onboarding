@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center mb-2'>
                <h3>Choose Size</h3>
                <p>Choices so far: {{$fueltype}}</p>
            </div>
        </div>

        <div class='row'>
            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/size/{{$fueltype}}/Large'>
                        <h5 class='text-dark'>Large (SUV, Estate etc)</h5>
                    </a>
                </div>
            </div>

            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/size/{{$fueltype}}/Medium'>
                        <h5 class='text-dark'>Medium (Saloons, coupes etc)</h5>
                    </a>
                </div>
            </div>
            <div class='col-12 mb-3'>
                <div class='card p-5 d-flex align-items-center justify-content-center'>
                    <a href='/size/{{$fueltype}}/Small'>
                        <h5 class='text-dark'>Small (Hatchbacks)</h5>
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