# Локальный запуск проекта P8641

## Коротко
1. Запустите Apache и MySQL.
2. Создайте БД `cometco_local`.
3. Импортируйте `database/create_table_local.sql`.
4. Проверьте `config/db_config_local.php`.
5. Откройте `http://localhost/local_server/index.php?page=home`.

## Проверка
- `http://localhost/local_server/api/get_measurements.php?limit=3`

Если API возвращает `"success": true`, подключение к БД работает.
