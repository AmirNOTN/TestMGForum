<?php
$servername = "localhost";
$username = "root"; // پیش‌فرض در XAMPP
$password = ""; // رمز عبور پیش‌فرض (خالی است)
$dbname = "game_db"; // نام دیتابیسی که ساختی

// اتصال به MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}
echo "اتصال موفق بود!";
?>
