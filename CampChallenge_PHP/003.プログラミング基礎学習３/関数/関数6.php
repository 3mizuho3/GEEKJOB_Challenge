<?php
/*引数:３人分のプロフィールと検索文字の２つ。
関数の中では、１つ目の引数で得た３人分のプロフィールから、
検索文字列を名前に含む（部分一致）プロフィールを探し、該当１件を返却する。*/
function kansu($prof,$search) {
  foreach( $prof as $key1 => $val1 ){
  foreach( $val1 as $key2 => $val2 ){
    if(strstr($val2,$search)){//部分一致の関数
        return array($key1,$val2);//２つ戻り値はできないので配列化して戻す
      }
    }
  }
}
//３人文のプロフィールと検索値を入れる--------------------------------
$prof1 = array(
  "鈴木さん" => array(
      "ID"=> "鈴木13101990",
      "name" => "鈴木",
      "adress" => "13101990",
      "birth" => "13/10/1990"
      ), // カンマ , で区切る
  "瑞穂さん" => array(
      "ID"=> "瑞穂01011990",
      "name" => "瑞穂",
      "adress" => "01011990",
      "birth" => "01/01/1990"
      ), // カンマ , で区切る
  "MIZUHOさん" => array(
      "ID"=> "MIZUHO01011990",
      "name" => "MIZUHOsan",
      "adress" => "31121990",
      "birth" => "31/12/1990"
      )
);
$search1 = "san";


//最終処理-------------------------------------------
$research = kansu($prof1,$search1);
echo "プロフィール名は".$research[0]."<br>"
     ."その名前は".$research[1];
