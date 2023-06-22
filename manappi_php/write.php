<?php
// inputから受け取る
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday']

// データを整形する
$data = $name . $birthPlace . "\n";

// データを保存する
file_put_contents('data/data.txt', $data, FILE_APPEND)

//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
