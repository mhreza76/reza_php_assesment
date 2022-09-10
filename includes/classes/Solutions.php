<?php

class Solutions
{
    public function solutionOne($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $decoded_json = json_decode($response, true);

        $data_array = (explode(", ",$decoded_json['data']));
        $count_speeds_over_60 = 0;
        $list_of_speeds_over_60 = [];
        foreach ($data_array as $data) {
            if (strpos($data, 'speed=') !== false) {
                $data = str_replace('speed=', '',$data);
                if( (int)$data > 60){
                    $count_speeds_over_60++;
                    array_push($list_of_speeds_over_60,$data);
                }
            }
        }
        echo "Total: " . $count_speeds_over_60 . '</br>';
        foreach ($list_of_speeds_over_60 as $speed_over_60) {
            echo $speed_over_60 . '</br>';
        }
    }

    public function solutionTwo($input_array){
        asort($input_array, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
        print_r($input_array);
    }

    public function solutionThree($IP, $len){
        if( $IP[0] == '.' || $len < 7 || $IP[$len-1] == '.' ) return false;

        $tokens = explode(".", $IP);
        $count = count($tokens);
        if( $count != 4 ) return false;

        foreach ($tokens as $token) {
            $isValid = $this->validateIPv4Token( $token, strlen($token) );
            if( !$isValid ) { return false; }
        }
        return true;
    }

    function validateIPv4Token($num, $l) {
        if( $l == 0 || $l > 3 ) return false;

        if( !ctype_digit( $num ) ) return false;

        $n = intval($num);

        if( $num[0] == 0 && $l > 1 ) { return false; }

        if( $n > 255 || $n < 0 ) { return false; }

        return true;
    }
}