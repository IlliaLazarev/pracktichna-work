<?php

$first_name = "Олена";
$last_name = "Коваль";
$year_of_birth = 2006;

$current_year = date("Y");

$age = $current_year - $year_of_birth;

echo "<h2>1. Повне ім’я та вік</h2>";
echo "Повне ім’я: $first_name $last_name <br>";
echo "Вік: $age років";

$countries = ["Україна", "Польща", "Німеччина", "Франція"];

echo "<h2>2. Список країн</h2>";
echo "<ol>";
foreach ($countries as $country) {
    echo "<li>$country</li>";
}
echo "</ol>";

$cities = [
    "Київ" => 2967000,
    "Львів" => 717000,
    "Одеса" => 1010000,
    "Харків" => 1420000
];

echo "<h2>3. Міста з населенням більше 1 млн</h2>";
foreach ($cities as $city => $population) {
    if ($population > 1000000) {
        echo "$city: $population осіб<br>";
    }
}

$number = 8;

echo "<h2>4. Парність числа</h2>";
if ($number % 2 == 0) {
    echo "Парне";
} else {
    echo "Непарне";
}

echo "<h2>5. Перевірка року на високосність</h2>";
if ($current_year % 4 == 0) {
    echo "Поточний рік ($current_year) є високосним.";
} else {
    echo "Поточний рік ($current_year) не є високосним.";
}
?>
