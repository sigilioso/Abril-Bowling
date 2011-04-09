<?php

/**
  * Kata 2011-04: Bowling
  *
  * Kata trying to resolve the Bowling problem using TDD.
  *
  * LICENSE: MIT license
  *
  * @category   Kata
  * @author     Rober Martín H "rmhdev"
  * @license    MIT License
  * @version    0.1
  * @link       http://github.com/12meses12katas/Abril-Bowling
 */

class Bowling {


    public function getValueOfFrame($frame) {
        if ($frame == '-'){
            return 0;
        }
        $total = 0;
        $last = 0;
        $bowls = str_split($frame);
        foreach ($bowls as $bowl){
            if ($bowl == 'X'){
                $total += 10;
                $last = 0;
            }
            if ($bowl == '/') {
                $total = $total + 10 - $last;
                $last = 0;
            }
            else {
                $total += (int)$bowl;
                $last = (int)$bowl;
            }
            
        }
        return $total;
    }

    public function getFirstFrameForSequence($sequence) {
        if (substr($sequence, 0, 1) == '-'){
            return '-';
        }
        $firstThree = substr($sequence, 0, 3);

        if ((strpos($firstThree, 'X') !== false) || (strpos($firstThree, '/') !== false)){
            return $firstThree;
        }
        return substr($sequence, 0, 2);
    }

    public function isStrike($frame){
        return (strpos($frame, 'X') === 0) ? true : false;
    }

    public function isSpare($frame){
        return (strpos($frame, '/') === 1) ? true : false;
    }
    
    


    
} 