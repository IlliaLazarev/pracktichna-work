<?php

$a = 5;
$b = 10;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$division = $a / $b;

echo "<h2>1. Арифметичні операції</h2>";
echo "a = $a, b = $b <br>";
echo "Сума: $sum <br>";
echo "Різниця: $difference <br>";
echo "Добуток: $product <br>";
echo "Ділення: $division";

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

echo "<h2>2. Дні тижня</h2>";
echo "3-й день: " . $days[2] . "<br>";
echo "5-й день: " . $days[4];

$products = [
    "Хліб" => 25,
    "Молоко" => 40,
    "Сир" => 120
];

echo "<h2>3. Товари і ціни</h2>";
foreach ($products as $productName => $price) {
    echo "$productName: $price грн<br>";
}

$day = "Monday";

echo "<h2>4. Повідомлення за днем тижня</h2>";
switch ($day) {
    case "Monday":
        echo "Сьогодні понеділок.";
        break;
    case "Tuesday":
        echo "Сьогодні вівторок.";
        break;
    case "Wednesday":
        echo "Сьогодні середа.";
        break;
    case "Thursday":
        echo "Сьогодні четвер.";
        break;
    case "Friday":
        echo "Сьогодні п’ятниця.";
        break;
    case "Saturday":
        echo "Сьогодні субота.";
        break;
    case "Sunday":
        echo "Сьогодні неділя.";
        break;
    default:
        echo "Невідомий день.";
}

$x = 15;

echo "<h2>5. Парне чи непарне</h2>";
echo ($x % 2 == 0) ? "Число $x парне." : "Число $x непарне.";
?>
