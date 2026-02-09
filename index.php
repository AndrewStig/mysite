<?php
/**
 * Главный файл сайта
 * Датчик температуры и влажности P8641
 */

// Определяем текущую страницу
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page === 'co2-measurement') {
    $page = 'measurement';
}

// Устанавливаем заголовок страницы
$pageTitles = [
    'home' => 'Главная',
    'author' => 'Об авторе',
    'introduction' => 'Введение',
    'device-description' => 'Описание устройства',
    'safety' => 'Безопасность',
    'getting-started' => 'Начало работы',
    'web-setup' => 'Настройка через веб-интерфейс',
    'tsensor-setup' => 'Настройка через TSensor',
    'network-setup' => 'Настройка сети',
    'alarm-setup' => 'Настройка аварийных сигналов',
    'measuring-setup' => 'Настройка измерений',
    'website' => 'Веб-сайт',
    'smtp' => 'SMTP - отправка e-mail',
    'snmp' => 'SNMP',
    'modbus' => 'Modbus TCP',
    'soap' => 'SOAP',
    'syslog' => 'Syslog',
    'sntp' => 'SNTP',
    'specifications' => 'Технические характеристики',
    'measurement' => 'Параметры измерения',
    'dimensions' => 'Габариты',
    'operating-conditions' => 'Условия эксплуатации',
    'applications' => 'Область применения',
    'mounting' => 'Монтаж устройства',
    'maintenance' => 'Обслуживание',
    'accessories' => 'Аксессуары',
    'charts' => 'Графики',
    'data-management' => 'Управление данными',
    'troubleshooting' => 'Решение проблем'
];

$pageTitle = isset($pageTitles[$page]) ? $pageTitles[$page] : 'Страница не найдена';

// Подключаем шапку
include 'includes/header.php';

// Подключаем контент страницы
$pageFile = 'pages/' . $page . '.php';
if (file_exists($pageFile)) {
    include $pageFile;
} else {
    include 'pages/404.php';
}

// Подключаем подвал
include 'includes/footer.php';
?>

