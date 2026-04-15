<?php

$product1 = 150;
$product2 = 220;
$product3 = 180;

$total = $product1 + $product2 + $product3;

echo "<h2>1. Загальна вартість покупки</h2>";
echo "Товар 1: $product1 грн<br>";
echo "Товар 2: $product2 грн<br>";
echo "Товар 3: $product3 грн<br>";
echo "Загальна вартість: $total грн";

$movies = ["Inception", "Titanic", "Avatar", "Interstellar", "Gladiator"];

echo "<h2>2. Улюблені фільми</h2>";
foreach ($movies as $movie) {
    echo $movie . "<br>";
}

$user = [
    "login" => "admin",
    "password" => "12345",
    "email" => "admin@example.com"
];

echo "<h2>3. Дані користувача</h2>";
echo "Логін: " . $user["login"] . "<br>";
echo "Пароль: " . $user["password"] . "<br>";
echo "Email: " . $user["email"] . "<br>";

$finalTotal = $total;

if ($total > 500) {
    $discount = $total * 0.10; 
    $finalTotal = $total - $discount;

    echo "<h2>4. Знижка</h2>";
    echo "Оскільки сума покупки більше 500 грн, надано знижку 10%.<br>";
    echo "Сума після знижки: $finalTotal грн";
} else {
    echo "<h2>4. Знижка</h2>";
    echo "Знижка не надається.<br>";
    echo "Підсумкова сума: $finalTotal грн";
}

$inputLogin = "admin";
$inputPassword = "12345";

$correctLogin = "admin";
$correctPassword = "12345";

echo "<h2>5. Перевірка логіна і пароля</h2>";
if ($inputLogin == $correctLogin && $inputPassword == $correctPassword) {
    echo "Вхід успішний.";
} else {
    echo "Неправильний логін або пароль.";
}
?>
