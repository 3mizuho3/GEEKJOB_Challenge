<?php
for($i=1; $i<=10; $i++){
  // 関数を利用
  kansu();
}

function kansu() {
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
