<?php
// This is the index page. The first route.
Route::set('', function() {
  View::make('Root');
});

Route::set('solution/1', function() {
    if (Route::isRouteValid()) {
        $url = 'http://103.219.147.17/api/json.php';
        (new Solutions)->solutionOne($url);
        die();
    }

});

Route::set('solution/2', function() {
    if (Route::isRouteValid()) {
        $input_array = array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3');
        (new Solutions)->solutionTwo($input_array);
        die();
    }
});

Route::set('solution/3', function() {
    if (Route::isRouteValid()) {
        $IP = '192.168.0.1';
        $len = strlen($IP);
        $is_valid_ip = (new Solutions)->solutionThree($IP, $len);
        if($is_valid_ip)
            echo 'TRUE';
        else
            echo 'FALSE';
        die();
    }
});

