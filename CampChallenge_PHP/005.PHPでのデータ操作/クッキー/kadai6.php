<?php
// 訪問回数カウント用の変数$visitにカウント値を格納
if (isset($_COOKIE["lasttime"])) {
  $time = date("Y/m/d H:i:s");
} else {
  $time = date("Y/m/d H:i:s");
}
setcookie("lasttime", $time);
echo "前回訪問した時間は".$_COOKIE["lasttime"];
?>
