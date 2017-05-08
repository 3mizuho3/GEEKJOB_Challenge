<?php
$data = array('type'=>'cake', 'size'=>'large',
            'money'=>1800);
// お菓子の種類、値段、大きさを表示
// $key:キーワード変数
// $value:中身用変数
foreach($data as $key => $value) {
    echo $key . '：' . $value . '<br>';
}
