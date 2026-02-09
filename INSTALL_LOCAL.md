# INSTALL LOCAL

## Вариант XAMPP (рекомендуется)
- Разместите проект: `C:\xampp\htdocs\local_server`
- Запустите Apache и MySQL
- В phpMyAdmin создайте БД `cometco_local`
- Импортируйте `database/create_table_local.sql`
- Проверьте `config/db_config_local.php`

Запуск:
- `http://localhost/local_server/index.php?page=home`

## Частые ошибки
- `could not find driver` -> включить `pdo_mysql` в `php.ini`
- `Access denied for user` -> проверить логин/пароль БД
