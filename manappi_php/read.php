<?php
// ファイルを読み込む
$data = file_get_contents('data/data.txt');

// 読み込んだものをブラウザに表示する
echo nl2br($data);