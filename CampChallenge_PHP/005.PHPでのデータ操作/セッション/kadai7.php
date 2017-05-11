<?php
  session_start();
    if (!isset($_SESSION["count"])){
        $_SESSION["count"]=1;
        $_SESSION["time"] = date("Y/m/d H:i:s");
    }else{
        $_SESSION["count"]++;
        $time = $_SESSION["time"];
        $_SESSION["time"] = date("Y/m/d H:i:s");
    }
    echo $_SESSION["count"].' 回目の訪問です。<br>';
    echo "前回訪問時間は".$time;
?>
