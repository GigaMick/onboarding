<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    class SearchController extends Controller {

        public function index()
        {

            return view('search-fueltype');

        }

        public function fueltype($token)
        {

            $fueltype = $token;

            return view('search-size', compact('fueltype'));

        }

        public function size($fueltype, $token)
        {

            $fuel = $fueltype;
            $size = $token;

            return view('search-budget', compact('size', 'fuel'));
        }

        public function budget(Request $request)
        {

            $size = $request->size;
            $fuel = $request->fueltype;
            $budget = $request->budget;

            return view('search-location', compact('size', 'fuel', 'budget'));

        }

        public function summary(Request $request)
        {

            $size = $request->size;
            $fuel = $request->fueltype;
            $budget = $request->budget;
            $postcode = $request->postcode;
            $distance = $request->distance;

            //$handle = curl_init('http://dev.ems.arnoldclark.co.uk/CustomerJourney/SearchingForNewVehicle');

            $data = array(
                'sizeOfCar'     => $size,
                'fuelTypes'     => $fuel,
                'maxPriceRange' => $budget,
                'postcode'      => $postcode,
                'distance'      => $distance,
            );

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://dev.ems.arnoldclark.co.uk/CustomerJourney/SearchingForNewVehicle",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    // Set here requred headers
                    "accept: */*",
                    "accept-language: en-US,en;q=0.8",
                    "content-type: application/json",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            }

           $cars = json_decode($response);


            //$encodedData = json_encode($data);
            //
            //curl_setopt($handle, CURLOPT_POST, 1);
            //curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
            //curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            //
            //$result = curl_exec($handle);
            //


            return view('results', compact('cars'));

        }


    }
