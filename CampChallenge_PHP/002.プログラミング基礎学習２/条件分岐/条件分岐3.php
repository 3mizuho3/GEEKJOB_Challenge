<?php
$type = 1;
// $typeにはスポーツの種類を表す数値が入っています
// 10ならサッカー、20なら野球、30ならラグビー
switch($type) {
    case 1:
        echo 'one';
        break;
    case 2;
        echo 'two';
        break;
    default:
        echo '想定外';
        break;
}
