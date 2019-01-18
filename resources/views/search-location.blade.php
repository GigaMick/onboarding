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
                    <form class='d-flex align-items-center justify-content-center flex-column' action="/summary" method='post'>
                        @csrf
                        <label>Enter your postcode</label>
                        <input type="text" name='postcode' class='px-3 py-2 btn-block py-2 mb-3' placeholder='Enter Postcode'>
                        <label>Enter the max distance</label>
                        <input type="number" name='distance' class='px-3 py-2 btn-block py-2' placeholder='Enter Distance'>
                        <input type="hidden" name='budget' value='{{$budget}}'>
                        <input type="hidden" name='fueltype' value='{{$fuel}}'>
                        <input type="hidden" name='size' value='{{$size}}'>
                        <input class='btn btn-block btn-success mt-3' type='submit' value='submit'>
                    </form>
<hr>
                    <form action="/summary" method='post'>
                        @csrf
                        <input type="hidden" name='fueltype' value='{{$fuel}}'>
                        <input type="hidden" name='distance' value='0'>
                        <input type="hidden" name='budget' value='{{$budget}}'>
                        <input type="hidden" name='postcode' value='0'>
                        <input type="hidden" name='size' value='{{$size}}'>
                        <input class='btn btn-block btn-info text-light py-3' type='submit' value="I Don't Care">
                    </form>
                </div>
            </div>


        </div>
    </div>


@endsection