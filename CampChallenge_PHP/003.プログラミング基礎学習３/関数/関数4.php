<?php
for($i=0; $i<=9; $i++){
  $boolean = kansu();
  if($boolean == true){
      //kansu();
      echo "この処理は正しく実行できました<br>";
    }else {
    }{
    }
}

function kansu() {
  // echo $test1; ← 関数外の$test1にはアクセスできないためNG
  $name = "Mizuho Suzuki"; // 外の$test2とは別もの
  $birth ="13/10/1990";
  $introduce ="My hometown is Yokohama, Kanagawa.";
  echo "My name is ".$name."<br>"
      ."My birth day is ".$birth."<br>"
      ."Introduction-- ".$introduce."<br>"; // 3000と表示されます。
  return true;
}
