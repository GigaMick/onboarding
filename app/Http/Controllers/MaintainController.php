<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class MaintainController extends Controller {

        public function index()
        {

            return view('maintain-enter-reg');
        }

        public function reg(Request $request)
        {

            $reg = $request->reg;

            $data = array(
                'RegNo' => $reg,
            );

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL            => "http://dev.ems.arnoldclark.co.uk/CustomerJourney/CurrentVehicle",
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 30000,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => "POST",
                CURLOPT_POSTFIELDS     => json_encode($data),
                CURLOPT_HTTPHEADER     => array(
                    // Set here requred headers
                    "accept: */*",
                    "accept-language: en-US,en;q=0.8",
                    "content-type: application/json",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err)
            {
                echo "cURL Error #:".$err;
            }

            $options = json_decode($response);
            dd($options);


        }
    }
