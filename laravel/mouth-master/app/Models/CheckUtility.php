<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckUtility extends Model
{
    use HasFactory;

    // checking radio value
    public function radio($q) { return $q == 1 ? 'YES' : 'NO'; }
    public function radio_color($q) { return $q == 1 ? 'success' : 'danger'; }

    public function empty_radio($q) {
        if(isset($q)) return $this->radio($q);
        else return 'None';
    }

    public function empty_radio_color($q) {
        if(isset($q)) return $this->radio_color($q);
        else return 'danger';
    }

    // convert string <-> array
    public function arr($str) { return explode(',', $str); }
    public function toString($arr) { return join(',', $arr); }

    public function to_array($request, $size, $data_name) {
        $arr = array();

        for($i = 0; $i < $size; $i++) {
            $data = $request[$data_name . ($i + 1)];

            array_push($arr, (isset($data)) ? $data : 'null');
        }

        return $arr;
    }

    // check date & time
    public function time($time) { return date( 'g:i A', strtotime( $time ) ); }

    // check if the value is empty
    public function empty($val) { return $val == 'null' ? $val : 'None'; }

}
