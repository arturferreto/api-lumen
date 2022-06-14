# API Lumen
Criando a minha primeira API usando Lumen.

## Iniciar o serviço
```
composer update --with-all-dependencies &&
cp .env.example .env && 
php artisan key:generate
php artisan migrate:fresh &&
php -S 127.0.0.1:8000 -t public/
```
