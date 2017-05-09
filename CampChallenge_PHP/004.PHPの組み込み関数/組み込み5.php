<?php
// 文字のバイト数調査
// 半角英数字は1バイトで表現できるので、4文字
echo strlen('MizuhoSuzuki');
echo "<br>";
echo mb_strlen('MizuhoSuzuki');
