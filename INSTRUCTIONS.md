# Инструкции по установке и настройке

## 1) Размещение проекта
- Загрузите папку проекта в веб-каталог сервера (например, `htdocs/local_server`).

## 2) Создание базы данных
1. Откройте phpMyAdmin.
2. Создайте БД `cometco_local`.
3. Импортируйте SQL-файл:
   - `database/create_table_local.sql` (локальный запуск)
   - `database/create_table.sql` (вариант для хостинга)

## 3) Настройка подключения
Файл: `config/db_config_local.php`

Рекомендуемые локальные параметры:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'cometco_local');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');
```

## 4) Проверка окружения
- PHP 7.3+
- MySQL/MariaDB
- Расширения PHP: `pdo_mysql`, `mysqli`

## 5) Проверка работоспособности
1. Откройте сайт:
   - `http://localhost/local_server/index.php?page=home`
2. Проверьте страницы:
   - `?page=charts`
   - `?page=data-management`
3. Проверьте API:
   - `http://localhost/local_server/api/get_measurements.php?limit=3`

## 6) Структура данных
Таблица: `p8641_measurements`
- `temperature` - температура, `°C`
- `humidity` - относительная влажность, `%RH`
- `measured_at` - время измерения

## 7) Частые проблемы
- `could not find driver` -> включите `pdo_mysql` в `php.ini` и перезапустите Apache.
- `Access denied for user` -> проверьте `DB_USER/DB_PASS` в `db_config_local.php`.
- Пустые данные в графике -> добавьте записи на странице `data-management` или сгенерируйте тестовые данные.
