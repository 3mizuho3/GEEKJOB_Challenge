<?php
$introduce = array(
  "鈴木" => array(
      "ID"=> "鈴木13101990",
      "name" => "鈴木",
      "adress" => "13101990",
      "birth" => "13/10/1990"
      ), // カンマ , で区切る
  "瑞穂" => array(
      "ID"=> "瑞穂01011990",
      "name" => "瑞穂",
      "adress" => "01011990",
      "birth" => "01/01/1990"
      ), // カンマ , で区切る
  "MIZUHO" => array(
      "ID"=> "MIZUHO01011990",
      "name" => "MIZUHO",
      "adress" => "31121990",
      "birth" => "31/12/1990"
      )
); // 文終了のセミコロン ;

foreach( $introduce as $key1 => $val1 ){
  echo "--".$key1. "--<br>";
  foreach( $val1 as $key2 => $val2 ){
    if($key2 == "ID"){
      continue;
      }
    if($key2 == "adress"){
      continue;
      }
    echo $key2. "：" .$val2."<br>";
  }
}
?>
