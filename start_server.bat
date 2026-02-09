@echo off

echo ========================================
echo Запуск локального сервера P8641
echo ========================================
echo.

if exist "C:\xampp\xampp-control.exe" (
    echo Найден XAMPP
    start "" "C:\xampp\xampp-control.exe"
    echo.
    echo 1. В XAMPP нажмите Start для Apache и MySQL
    echo 2. Откройте: http://localhost/local_server/
    goto :end
)

if exist "C:\OpenServer\OpenServer.exe" (
    echo Найден OpenServer
    start "" "C:\OpenServer\OpenServer.exe"
    echo.
    echo Запустите сервер и откройте путь проекта local_server
    goto :end
)

if exist "C:\laragon\laragon.exe" (
    echo Найден Laragon
    start "" "C:\laragon\laragon.exe"
    echo.
    echo Нажмите Start All и откройте проект local_server
    goto :end
)

echo Локальный сервер не найден.
echo Установите XAMPP, OpenServer или Laragon.

:end
pause
