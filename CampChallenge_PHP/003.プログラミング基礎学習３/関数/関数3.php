<?php

function X($num1,$num2 = 5,$num3 = false) {
    if($num3 == true){
      echo "入力値は ".$num1." ".$num2." ".$num3."<br>";
      echo "出力値は ".($num1 + $num2) * ($num1 + $num2)."<br>";
    }
    else{
      echo "入力値は ".$num1." ".$num2." ".$num3."<br>";
      echo "出力値は ".($num1 + $num2)."<br>";}
}

X(4,10,false);
X(4,10,true);
