<?php
$fp = fopen('myprofile.txt', 'r');
// きちんと開けたら
if ($fp != false) {
    echo fgets($fp);
    fclose($fp);
}
