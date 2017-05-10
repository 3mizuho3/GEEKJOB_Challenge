<html>
<head>
<meta charset="utf-8"/>
<title>sample</title>
</head>
<body>
<table border="1">
  <tr>
    <td>商品種別</td>
    <td>
      <?php
        if($_GET["type"] == 1){echo "雑貨";
          }else if ($_GET["type"] == 2){echo "生鮮食品";
          }else if ($_GET["type"] == 3){echo "その他";
          }
      ?></td>
  </tr>
</table>
<br />
    <?php
      echo "1個あたり\n".round($_GET["total"] / $_GET["count"])."円<br>";
      if($_GET["total"] >= 3000){
        echo "ポイントが\n".round($_GET["total"]*0.04)."個つきます";
      }else if($_GET["total"] >= 5000){
        echo "ポイントが\n".round($_GET["total"]*0.05)."個つきます";
      }else{echo "今回ポイントはつきません";}
      ?></td>
</body>
</html>
