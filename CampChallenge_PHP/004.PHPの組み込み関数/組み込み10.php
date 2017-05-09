<?php

$fp = fopen('update.txt', 'w+');
// きちんと開けたら
if ($fp != false) {
    fwrite($fp,"aa");// １行読み出し
    //echo fgets($fp);
    // 書いたら、閉じる
    fclose($fp);
  }
    var_dump(file_get_contents('update.txt'));
