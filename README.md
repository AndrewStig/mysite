# Датчик температуры и влажности P8641 - веб-сайт

Учебный веб-ресурс по прибору P8641 с PHP-компоновкой страниц, локальной базой MySQL и интерактивными графиками/таблицами измерений.

## Что реализовано
- Многостраничный сайт (30+ страниц) на PHP-роутинге
- Измерения температуры и влажности: просмотр, добавление, удаление, генерация тестовых данных
- Графики на локальной `Chart.js`
- Lightbox для изображений
- Адаптивный интерфейс и отдельный файл стилей `css/styles.css`

## Структура
- `index.php` - роутинг страниц
- `pages/` - контентные страницы
- `includes/` - шапка/подвал
- `api/` - API для работы с БД
- `database/` - SQL-скрипты
- `config/` - подключение к БД
- `css/`, `js/`, `images/`

## Быстрый локальный запуск (XAMPP)
1. Запустите `Apache` и `MySQL`.
2. Поместите папку проекта в `C:\xampp\htdocs\local_server`.
3. В phpMyAdmin создайте БД `cometco_local`.
4. Импортируйте `database/create_table_local.sql`.
5. Проверьте `config/db_config_local.php`:
   - `DB_HOST=localhost`
   - `DB_NAME=cometco_local`
   - `DB_USER=root`
   - `DB_PASS=''`
6. Откройте: `http://localhost/local_server/index.php?page=home`

## Проверка API
- `http://localhost/local_server/api/get_measurements.php?limit=5`

Если в ответе есть `"success": true`, подключение к БД работает.

## Примечание
Проект использует только локальные ресурсы (без внешних CDN на runtime).
