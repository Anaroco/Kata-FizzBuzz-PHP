<?php

namespace Tests;

use App\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
  
    public function test_isFizz_if_divisible_by_three() {
        //given
        $num = 3;
        $fizBuzz = new FizzBuzz;

        //when
        $result = $fizBuzz->getFizzBuzz($num);

        //Then
        $this->assertEquals('Fizz', $result);
    }


    public function test_isFizz_if_divisible_by_five() {
        //given
        $num = 5;
        $fizBuzz = new FizzBuzz;

        //when
        $result = $fizBuzz->getFizzBuzz($num);

        //Then
        $this->assertEquals('Buzz', $result);

 }

 public function test_isFizz_if_divisible_by_five_and_three() {
    //given
    $num = 15;
    $fizBuzz = new FizzBuzz;

    //when
    $result = $fizBuzz->getFizzBuzz($num);

    //Then
    $this->assertEquals('FizzBuzz', $result);

}
public function test_if_not_divisible() {
    //given
    $num = 8;
    $fizBuzz = new FizzBuzz;

    //when
    $result = $fizBuzz->getFizzBuzz($num);

    //Then
    $this->assertEquals($num, $result);

}


}

?>