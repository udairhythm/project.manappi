<?php
// ファイルを読み込む
$data = file_get_contents('manappi_php/data.txt');

// 読み込んだものをブラウザに表示する
echo nl2br($data);