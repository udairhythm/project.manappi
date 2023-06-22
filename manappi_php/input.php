<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        Email: <input type="text" name="email">
        生年月日: <input type="date" name="birthday">
        興味ある分野: 
        <select name="interests" id="interests">
            <option value="none">-</option>  
            <option value="tech">01. テクノロジー</option>
            <option value="money">02. お金</option>
            <option value="business">03. ビジネス</option>
            <option value="medical">04. 健康・医療</option>
        </select>
        <input type="submit" value="送信">
    </form>
</body>

</html>
