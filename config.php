<?php
/**
 * Конфигурация базы данных
 * ЗАМЕНИТЕ ДАННЫЕ НА ВАШИ!
 */

$db_config = [
    'host' => 'localhost',          // Обычно localhost
    'database' => 'ваша_база',      // Имя вашей базы данных
    'username' => 'ваш_пользователь', // Имя пользователя базы данных
    'password' => 'ваш_пароль',     // Пароль пользователя
    'charset' => 'utf8mb4'
];

// Секретные ключи
define('API_SECRET_KEY', 'YOUR_SECRET_KEY');        // Для бота
define('ADMIN_SECRET_KEY', 'YOUR_ADMIN_SECRET');    // Для админ-панели

// Другие настройки
define('SITE_URL', 'https://ваш-домен.com'); // URL вашего сайта
define('BOT_USERNAME', 'YOUR_BOT_USERNAME');  // Username вашего бота
?>