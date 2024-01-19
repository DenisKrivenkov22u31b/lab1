<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат вычисления</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем значения длин оснований из формы
        $a = $_POST["a"];
        $b = $_POST["b"];

        // Проверяем, что введены числа
        if (is_numeric($a) && is_numeric($b)) {
            // Вычисляем длину средней линии
            $L = ($a + $b) / 2;

            // Выводим результат
            echo "<h2>Результат:</h2>";
            echo "<p>Длина средней линии трапеции: $L</p>";
        } else {
            echo "<p>Пожалуйста, введите числовые значения для длин оснований.</p>";
        }
    }
    ?>

</body>
</html>
