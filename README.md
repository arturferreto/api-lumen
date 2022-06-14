# API Lumen
Criando a minha primeira API usando Lumen.

## Iniciar o serviço
```
git clone https://github.com/arturferreto/api-lumen.git &&
cd api-lumen/ &&
composer update --with-all-dependencies &&
cp .env.example .env && 
php artisan key:generate
php artisan migrate:fresh &&
php -S 127.0.0.1:8000 -t public/
```

### Tutorial
```
https://www.youtube.com/watch?v=V7Iujd9C404&t=249s
```
