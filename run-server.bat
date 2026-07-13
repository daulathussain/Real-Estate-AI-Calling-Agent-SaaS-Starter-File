@echo off
:: Start PHP built-in server on 127.0.0.1:8000 serving the public folder
php -S 127.0.0.1:8000 -t "%~dp0public"
pause