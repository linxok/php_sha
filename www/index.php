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
                <div class="link"><a href="statistic.php">Статистика</a></div>
                <h2>Тест по PHP</h2>
            </div>
            <form class="form" action="result.php" method="post">
                <input type="text" class="input_name" placeholder="Введіть ваше ім’я" name="name" required>
                <ul style="list-style-type:number">
                    <li>Що означає абревіатура PHP?</li>
                    <input type="radio" name="question1" value="0"><label>Public Hosting Platform</label><br>
                    <input type="radio" name="question1" value="0"><label>Preformatted Hypertext Processor</label><br>
                    <input type="radio" name="question1" value="1"><label>PHP: Hypertext Preprocessor</label><br>
                    <input type="radio" name="question1" value="0"><label>Private Home Page</label><br>

                    <li>Як створити зміну name в PHP?</li>
                    <input type="radio" name="question2" value="1"><label>$name</label><br>
                    <input type="radio" name="question2" value="0"><label>let name</label><br>
                    <input type="radio" name="question2" value="0"><label>variable name</label><br>
                    <input type="radio" name="question2" value="0"><label>?name</label><br>

                    <li>Яка з наведених нижче функцій використовується для виведення тексту на екран у PHP?</li>
                    <input type="radio" name="question3" value="0"><label>display</label><br>
                    <input type="radio" name="question3" value="1"><label>echo</label><br>
                    <input type="radio" name="question3" value="0"><label>write</label><br>
                    <input type="radio" name="question3" value="0"><label>output</label><br>

                    <li>Який оператор використовується для виконання умовних операцій у PHP?</li>
                    <input type="radio" name="question4" value="0"><label>for</label><br>
                    <input type="radio" name="question4" value="0"><label>foreach</label><br>
                    <input type="radio" name="question4" value="0"><label>loop</label><br>
                    <input type="radio" name="question4" value="1"><label>if</label><br>

                    <li>Які з наступних функцій використовуються для з'єднання з базою даних PHP?</li>
                    <input type="radio" name="question5" value="1"><label>mysqli_connect</label><br>
                    <input type="radio" name="question5" value="0"><label>connect_to_db</label><br>
                    <input type="radio" name="question5" value="0"><label>db_open</label><br>
                    <input type="radio" name="question5" value="0"><label>db_connection</label><br>

                    <li>Що означає абревіатура PDO?</li>
                    <input type="radio" name="question6" value="0"><label>PHP Database Object</label><br>
                    <input type="radio" name="question6" value="0"><label>Personal Data Organizer</label><br>
                    <input type="radio" name="question6" value="1"><label>PHP Data Objects</label><br>
                    <input type="radio" name="question6" value="0"><label>Public Database Operator</label><br>

                    <li>Який символ використовується для початку однорядкового коментаря в PHP?</li>
                    <input type="radio" name="question7" value="0"><label>Public Hosting Platform</label><br>
                    <input type="radio" name="question7" value="0"><label>Preformatted Hypertext Processor</label><br>
                    <input type="radio" name="question7" value="1"><label>PHP: Hypertext Preprocessor</label><br>
                    <input type="radio" name="question7" value="0"><label>Private Home Page</label><br>

                    <li>Яким чином ви підключаєте файл з кодом PHP до іншого файлу?</li>
                    <input type="radio" name="question8" value="0"><label>/*</label><br>
                    <input type="radio" name="question8" value="1"><label>//</label><br>
                    <input type="radio" name="question8" value="0"><label>--</label><br>
                    <input type="radio" name="question8" value="0"><label>^^</label><br>
                </ul>
                <input type="submit" value="Завершити">
            </form>
        </div>
    </div>
</section>
</body>
</html>