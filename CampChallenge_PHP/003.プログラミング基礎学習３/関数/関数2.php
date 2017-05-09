<?php

function X($num=100) {
    if($num % 2 == 0){
      echo $num."は偶数です<br>";
    }
    else{echo $num."は奇数です<br>";}
}

X(4);
X(5);
