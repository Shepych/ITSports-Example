<?php

# Задание 1
$arrayNumber = [0, 3, 2, 1, 6, 5, 4, 8, 9, 7];
sort($arrayNumber);

echo '<pre>';
var_dump($arrayNumber);
echo '</pre>';

# Задание 2
$query = "SELECT * FROM `table` WHERE `id` = 10";

# Задание 3
$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44',
];
foreach($arrayInfo as $key => $value) {
    echo '<pre>';
    var_dump("Ключ: " . $key . " | Значение: " . $value);
    echo '</pre>';
}

# Задание 4
$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь',
    ],
];

foreach($arrayMonth as $value) {
    foreach($value as $month) {
        echo '<pre>';
        var_dump($month);
        echo '</pre>';
    }
}

# Задание 5
$json = json_decode('{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}');
foreach($json as $year) {
    echo '<pre>';
    var_dump($year);
    echo '</pre>';
}

# Задание 6
# 1) Запрос не будет выполнен т.к параметры переданные в функцию mysqli_connect отправляются в неверном порядке.
# Верный порядок будет таков: mysqli_connect($hostname, $username, $password, $database)
# 2) Запрос вытаскивает всю информацию из таблицы `users`
# 3) DELETE FROM `users` WHERE `id` > 0 AND `id` <= 5 

# Задание 7
$path = 'text.txt';
if(isset($_POST['string'])) {
    file_put_contents($path, $_POST['string']);
}
?>

<form method="POST">
    <input type="text" name="string">
    <input type="submit" value="Сохранить">
</form>