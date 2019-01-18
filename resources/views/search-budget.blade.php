@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center mb-2'>
                <h3>Choose Budget</h3>
                <p>Choices so far: {{$fuel}}, {{$size}}</p>
            </div>
        </div>

        <div class='row'>
            <div class='col-12 mb-3'>
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
    </div>


@endsection