<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>sample</title>
</head>
<body>
    <h1>結果表示</h1>
      <?php
      $str = $_GET["origin"];
      $prime = array();
      echo "元の値\n".$str."<br>";
      for($i = 2, $j = 0; $i < 10;){
        if($str % $i == 0){
          $str = $str / $i;
          $prime[$j] = $i;
          $j++; $str1 = $str;
        }else{$i++;
        }
      }
      for($i > 10; $i <= $_GET["origin"];){
        if($str % $i ==0){
          $str = $str / $i;
          $k = $i;
        }else{$i++;}
      }

      if($k < 10){
        echo "素因数は１ケタのみで\n";
          foreach($prime as $value){
            echo $value."\n";
          }
      }else{
        echo "2ケタの素因数を含みます。<br>";
        echo "1ケタの素因数は\n";
          foreach($prime as $value){
            echo $value."\n";
          }
        echo "<br>余りは\n".$str1;
        }
      ?>
</body>
</html>
