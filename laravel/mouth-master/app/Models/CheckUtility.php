<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckUtility extends Model
{
    use HasFactory;

    // checking radio value
    public function radio($q) { return $q == 1 ? 'YES' : 'NO'; }
    public function radio_check($q) { return $q == 1 ? 'fa-check text-success' : 'fa-xmark text-danger'; }
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
    public function date($date) { return date( 'F d, Y', strtotime( $date ) ); }
    public function time($time) { return date( 'g:i A', strtotime( $time ) ); }
    public function retime($date) { return date( 'Y-m-d', strtotime( $date ) ); }
    public function retime_empty($date) { return isset($date) ? $this->retime($date) : ''; }
    //public function redate($time) { return date( 'g:i A', strtotime( $time ) ); }

    // check if the value is empty
    public function empty($val) { return $val == 'null' ? $val : 'None'; }
    public function null($val) { return $val != 'null' ? $val : ''; }
    
}
