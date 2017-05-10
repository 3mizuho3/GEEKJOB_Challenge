<?php
$filename = 'memo.txt';
$s1 = "作業開始！";
$s2 = "作業終了！";
$time = date("H:i:s");
//ファイルにログを残す部分
$fp = fopen($filename,'r+');
ftruncate($fp,0);
fclose($fp);

file_put_contents($filename,$s1." ".$time."<br>",FILE_APPEND);
//組み込み関数実行部分
$string = "suzuki
Mizuho
です。
";
$result = nl2br($string);//改行に<br>を入れれる組み込み関数
echo "==使用した組込関数はnl2br。結果表示==<br>";
echo $result;
//ファイルにログを残す部分
file_put_contents($filename,$s2." ".$time."<br>",FILE_APPEND);

echo "==ログファイルの出力結果==<br>";
readfile($filename);
