<?php

//змінні
$name = "Іван";
$age = 19;
$is_student = true;

echo "<h2>1. Змінні</h2>";
echo "Мене звати $name, мені $age років, ";
echo $is_student ? "я є студентом." : "я не є студентом.";

$numbers = [1, 2, 3, 4, 5];

$sum = array_sum($numbers);

echo "<h2>2. Сума елементів масиву</h2>";
echo "Масив: " . implode(", ", $numbers) . "<br>";
echo "Сума всіх елементів: $sum";

$user = [
    "name" => "Іван Петренко",
    "email" => "ivan@example.com",
    "phone" => "+380991112233"
];

echo "<h2>3. Дані користувача</h2>";
echo "<ul>";
echo "<li>Ім'я: " . $user["name"] . "</li>";
echo "<li>Email: " . $user["email"] . "</li>";
echo "<li>Телефон: " . $user["phone"] . "</li>";
echo "</ul>";

echo "<h2>4. Перевірка віку</h2>";
if ($age > 18) {
    echo "Вік більше 18 років.";
} else {
    echo "Вік 18 або менше років.";
}

// 5. Оцінка за шкалою
$grade = 85;

echo "<h2>5. Оцінка</h2>";
if ($grade >= 90 && $grade <= 100) {
    echo "Відмінно";
} elseif ($grade >= 70 && $grade <= 89) {
    echo "Добре";
} elseif ($grade >= 50 && $grade <= 69) {
    echo "Задовільно";
} else {
    echo "Незадовільно";
}
?>
