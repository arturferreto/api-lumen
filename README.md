# API Lumen
Este foi um teste muito promissor do framework Lumen (Mini framework Laravel), infelizmente foi descontinuado pois o Lumen não é mais recomendado pelos desenvolvedores do Laravel atualmente. Todos os próximos projeto de API's serão diretamente pelo Framework Laravel.

A estrutura deste projeto segue em: Routes > Controllers > Services > Repositories > Models

## Iniciar o serviço
```
composer update --with-all-dependencies &&
cp .env.example .env && 
php artisan key:generate
php artisan migrate:fresh &&
php -S 127.0.0.1:8000 -t public/
```
