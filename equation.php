<?php
    function line($a, $b) {
        if (is_numeric($a) && is_numeric($b)){
            if ($a != 0){
                return[-$b / $a];
            }
        }
        return[];
    }
    function square($a, $b, $c){
        if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
            if($a == 0){
                return line($b, $c);
            }
            $d=$b*$b - 4*$a*$c;
            if($d >= 0){
                $x1 = (-$b + sqrt($d) ) / 2 / $a;
                $x2 = (-$b - sqrt($d)) / 2 / $a ;
            }
        }
        return[$x1,$x2];
    }
    //Вид уравнение x3+a*x2+b*x+c=0.
    function cube($a=1, $b=-2, $c=-1){
        if(is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            $Q = ($a * $a - 3 * $b) / 9;
            $R = ($a * 2 * $a * $a - 9 * $b * $a + 27 * $c) / 54;
            if($R * $R < $Q * $Q * $Q) {
                $t = acos($R/sqrt($Q * $Q * $Q))/3;
                $x1 = -2 * sqrt($Q)* cos($t) - $a / 3;
                $x2 = -2 * sqrt($Q)* cos($t + (2 * M_1_PI / 3)) - $a /3;
                $x3 = -2 * sqrt($Q)* cos($t - (2 * M_1_PI / 3)) - $a /3;
                return[$x1,$x2,$x3];
            }
            if($R * $R >= $Q * $Q * $Q) {
                $A = -1 * pow(abs($R) + sqrt($R * $R - $Q * $Q * $Q),1/3);
                if($A !=0 && $B = 0){
                    $B = $Q / $A;
                    $x1 = ($A + $B) - $a / 3;
                    $x2 = ($A / $B) / 2 - $a / 3 + sqrt(3) * ($A - $B) / 2;
                    $x3 = ($A / $B) / 2 - $a / 3 + sqrt(3) * ($A - $B) / 2;
                }
                if($A == $B){
                    $x2 = -$A - $a / 3;
                }

                return[$x1,$x2,$x3];
            }
        }
    }
    //Вид уравнения x^4+Ax^3+Bx^2+Cx+D=0
    function four($a = 1,$b = 2, $c = 3, $d = 1){
        if(is_numeric($a) && is_numeric($b) && is_numeric($c) && is_numeric($d)) {

            $x = $y - $a/4;
            $p = $b - (3 * $a * $a)/8;
            $q = pow($a,3) / 8 - $a * $b / 2 + $c;
            $r = - 3 * pow($a,4) / 256 + $a * $a * $b / 16 - $c * $a / 4 + d;
           return square($y * $y, $y * sqrt(2 - $p), $q/2 *  sqrt(2 - $p));
        }
    }



?>