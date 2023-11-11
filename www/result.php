<?php
require_once 'db_connect.php';
$request = $_POST;
if (strlen($request['name']) >0) {
    $name = $request['name'];
    unset($request['name']);

    $total = 0;
    $corect = 0;
    foreach ($request as $key=>$value){
        $total++;
        $corect = $corect + (int)$value;
    }
    $db_request = "INSERT INTO $tableName (name, total, corect, incorect) VALUES ('$name', $total, $corect, $total - $corect )";
    $mysqli->query($db_request);
}
$mysqli->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
</head>
<body>
<section class="main">
    <div class="header">
    </div>
    <div class="content">
        <div class="wrapper">
            <div class="test">
                <div class="link"><a href="/">Назад</a></div>
                <h2>Тест по PHP</h2>
                <p>Ви успішно пройшли тест!</p>
                <p>Ось ваш результат:</p>
                <div class="result">
                    <p>Всього:   <?php echo $total ?></p>
                    <p>Правильні відповіді:  <?php echo $corect ?></p>
                    <p>Неправильні відповіді:  <?php  echo ($total - $corect) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>