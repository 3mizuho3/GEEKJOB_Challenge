<?php
        // put your code here
        session_start();
        $name=$_POST["name"];
        $sex=$_POST["sex"];
        $hobby=$_POST["hobby"];
        $flag=$_POST["flag"];
        //
        if($flag=="on"){
            $message="情報を記録しました";
            $_SESSION["name"]=$name;
            $_SESSION["sex"]=$sex;
            $_SESSION["hobby"]=$hobby;
        }else{
            $message="情報は記録してません";
           $_SESSION["name"]=$name;
           $_SESSION["sex"]=$sex;
           $_SESSION["hobby"]=$hobby;
        }

        ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <p><?php echo $message; ?></p>
        <p><a href="kadai8input.php">戻る</a></p>
    </body>
</html>
