@echo off
REM Start XAMPP MySQL and create database, then run migrations

echo Starting XAMPP MySQL setup...
echo.

REM Create the database
echo Creating database 'simple_crud'...
"C:\xampp\mysql\bin\mysql.exe" -u root -e "CREATE DATABASE IF NOT EXISTS simple_crud;"

if %ERRORLEVEL% EQU 0 (
    echo Database created successfully!
    echo.
    echo Running Laravel migrations...
    cd /d f:\Simple_crud
    php artisan migrate
    echo.
    echo Setup complete! You can now access the app at http://localhost:8000/inventories
) else (
    echo Error: Could not connect to MySQL. Please make sure XAMPP MySQL is running.
    echo You can start it from XAMPP Control Panel.
    pause
)
