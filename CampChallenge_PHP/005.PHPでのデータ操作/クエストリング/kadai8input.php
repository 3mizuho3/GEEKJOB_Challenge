<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        if(isset ($_SESSION["name"])){
            $name=$_SESSION["name"];
            $sex=$_SESSION["sex"];
            $hobby=$_SESSION["hobby"];
        }else{
            $name="";
            $sex="";
            $hobby="";
        }
        ?>
        <form method="post" action="kadai8out.php">
            <label>名前 : </label><input type="text" name="name" value="<?php echo $name ?>" /><br/>
            <label>性別 : </label>
            <input type="radio" name="sex" value="<?php echo $sex ?>" />女性
            <input type="radio" name="sex" value="<?php echo $sex ?>" />男性<br />
            <label>趣味 : </label><input type="text" name="hobby" value="<?php echo $hobby ?>" /><br/>
            <label>情報を保存する：</label><input type="checkbox" name="flag" value="on" /><br/>
            <input type="submit" value="送信" />
        </form>
    </body>
</html>
