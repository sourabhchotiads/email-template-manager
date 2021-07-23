<?php

    if(!function_exists('sendResponse')){
        function sendResponse($data){

            header('Content-Type','application/json');
            echo json_encode($data);
        }
    }

    if(!function_exists('get_message')){
        function get_message($key){

            $message = [
                'data_found' => 'Data Found',
                'no_record' => 'No Data Found',
            ];

            return $message[$key];
        }
    }


