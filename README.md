# Laravel 10 ACL

Criação de um sistema ACL com o poderoso framework PHP, o Laravel.
Neste projeto irei trabalhar com controle de acessos aos recursos de um Sistema.

### Instalação

Clone Repositório
```sh
git clone https://github.com/pedrobombig/laravel-api-acl laravel-api-acl
```
```sh
cd laravel-api-acl
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Laravel API - ACL"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=LARAVEL_ACL
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container app
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
