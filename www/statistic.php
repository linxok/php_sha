<?php
require_once 'db_connect.php';

$sql_request = "SELECT * FROM $tableName";

$list_db = $mysqli->query($sql_request);

$items = [];

while ($item = ($list_db->fetch_array(MYSQLI_ASSOC))) {
    $items[] = array('id' => $item['id'], 'name' => $item['name'], 'total' => $item['total'], 'corect' => $item['corect'], 'incorect' => $item['incorect']);
}
$mysqli->close();

$items = array_sort($items, 'corect', SORT_DESC);


/**
 * @param $array
 * @param $on
 * @param $order
 * @return array
 */
function array_sort($array, $on, $order = SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }
        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }
        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }
    return $new_array;
}

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
            </div>
            <table class="table">
                <tr class="row">
                    <th>Ім'я</th>
                    <th>Всього</th>
                    <th>Правильні</th>
                    <th>Неправильні</th>
                </tr>
                <?php
                foreach ($items as $item) { ?>
                    <tr class="row">
                        <td><?php echo htmlspecialchars($item['name']) ?></td>
                        <td><?php echo $item['total'] ?></td>
                        <td><?php echo $item['corect'] ?></td>
                        <td><?php echo $item['incorect'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>
</body>
</html>
