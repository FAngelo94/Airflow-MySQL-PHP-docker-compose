<?php

function json_response($code = 200, $message = null)
{
    // return the encoded json
    return json_encode(array(
        'status' => $code < 300, // success or not?
        'message' => $message
        ));
}

// if you are doing ajax with application-json headers
/*if (empty($_POST)) {
    $_POST = json_decode(file_get_contents("php://input"), true) ? : [];
}
*/
// usage

// array usage
echo json_response(200, array(
  'data' => array(1,2,3)
  ));
// {"status":true,"message":{"data":[1,2,3]}}

// usage with error
//echo json_response(500, 'Server Error! Please Try Again!'); // {"status":false,"message":"Server Error! Please Try Again!"}