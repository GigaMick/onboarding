<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

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

            $handle = curl_init('https://webhook.site/b55523cc-5959-4cc8-8bb0-16251031872d');

            $data = array(
                'sizeOfCar' => $size,
                'fuelTypes' => $fuel,
                'maxPriceRange' => $budget,
                'postcode' => $postcode,
                'distance' => $distance,
            );

            $encodedData = json_encode($data);

            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
            curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

            $result = curl_exec($handle);

            $json = file_get_contents('php://input');
            $data1 = json_decode($json);


            dd($size.", ".$fuel.", ".$budget.", ".$postcode.", ".$distance.", ".$result.", ".$data1);
        }


    }
