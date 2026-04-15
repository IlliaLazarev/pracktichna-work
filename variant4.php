<?php

$num1 = 24;
$num2 = 17;

if ($num1 > $num2) {
    $max = $num1;
    $min = $num2;
} else {
    $max = $num2;
    $min = $num1;
}

echo "<h2>1. Максимум і мінімум</h2>";
echo "Перше число: $num1 <br>";
echo "Друге число: $num2 <br>";
echo "Максимум: $max <br>";
echo "Мінімум: $min";

$numbers = [10, 20, 30, 40, 50];

$average = array_sum($numbers) / count($numbers);

echo "<h2>2. Середнє арифметичне</h2>";
echo "Масив: " . implode(", ", $numbers) . "<br>";
echo "Середнє арифметичне: $average";

$students = [
    "Іван Петренко" => 85,
    "Марія Іваненко" => 78,
    "Олег Сидоренко" => 92
];

echo "<h2>3. Студенти з балом більше 80</h2>";
foreach ($students as $student => $score) {
    if ($score > 80) {
        echo "$student: $score <br>";
    }
}

$num = 12;

echo "<h2>4. Кратність числа</h2>";
if ($num % 3 == 0 || $num % 5 == 0) {
    echo "Число $num кратне 3 або 5.";
} else {
    echo "Число $num не кратне ні 3, ні 5.";
}

echo "<h2>5. Таблиця множення для числа 7</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
?>
