@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center mb-2'>
                <h3>Suggested Cars</h3>
            </div>
        </div>

        @foreach ($cars as $car)
            <div class='row'>
                <div class='col-12'>
                    <div class='card p-3 mb-2 text-center'>
                        <h4>{{$car->Make}} {{$car->Model}}</h4>
                        <h5 class=''>£{{$car->Cost}}</h5>
                        <a href='{{$car->LinkToView}}' class='btn btn-success btn-block py-3'>View This Car</a>
                    </div>
                </div>
            </div>


        @endforeach
    </div>


@endsection