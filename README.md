## Install This Project

set database config at .env file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test-simple-blog
DB_USERNAME=root
DB_PASSWORD=
```

open cmd go to project directory

run code:
```
php artisan migrate
php artisan db:seed
php artisan serve
```

default email and password for admin access

```
email: admin@admin.com
password: 123456
```
