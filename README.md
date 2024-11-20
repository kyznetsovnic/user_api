### Старт приложения:

- docker compose up -d
- docker compose exec -it app bash

    ```
    composer install
    php artisan migrate
    ```

### API:
    localhost:8071/api/v1

#### Регистрация:
```
   POST /auth/register
   payload:
       {
            "email": "user1@mail.com",
            "password": 1234567,
            "gender": "m", // m - man or w - woman
       }
```
#### Список пользователей:
```
   GET /users
``` 

#### Профиль пользователя:
```
   GET /users/{id}/profile
```   
