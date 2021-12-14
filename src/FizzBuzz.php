<?php

namespace App;

use PHPUnit\Framework\TestCase;

class FizzBuzz {

    public function getFizzBuzz($num) {

        $fizz = 'Fizz';
        $buzz = 'Buzz';

        if($num %3 == 0 && $num %5 ==0) {
            return $fizz . $buzz;
        }

        if(($num %3 == 0) || (strpos($num, '3')) !== false ) {
            return $fizz;
        }

        if(($num %5 == 0) || (strpos($num, '5')) !== false ) {
            return $buzz;
        }

        return $num;
    }
}

?>
