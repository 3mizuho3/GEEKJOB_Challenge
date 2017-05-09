<?php
function myprofile() {
    // echo $test1; ← 関数外の$test1にはアクセスできないためNG
    $name = "Mizuho Suzuki"; // 外の$test2とは別もの
    $birth ="13/10/1990";
    $introduce ="This is Mizuho from Japan.
                 My hometown is Yokohama, Kanagawa.
                 Nice to meet you.";
    echo "My name is ".$name."<br>"
        ."My birth day is ".$birth."<br>"
        ."Introduction-- ".$introduce."<br>"; // 3000と表示されます。
}

function evenodd($num=100) {
    if($num % 2 == 0){
      echo $num."は偶数です<br>";
    }
    else{echo $num."は奇数です<br>";}
}
