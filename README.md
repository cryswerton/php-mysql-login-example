# PHP MySQL LOGIN Example
### Prerequisites
LAMP stack fully set up;\
phpmyadmin set up;\
MariaDB database created;\
Table "users" created;

### The "users" table:
``` SQL
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
### Create and set up a env.php base on the example.env.php example. The "APP_NAME" and "HTTP" values can remain blank.
```PHP
<?php

$ENV = [
  "APP_NAME" => "",
  "DB_HOST" => "localhost",
  "DB_PORT" => "",
  "DB_DATABASE" => "",
  "DB_USERNAME" => "",
  "DB_PASSWORD" => "",
  "HTTP" => "http://"
  ];
  
?>
```

## 1:
![PHP-LOGIN-PAGE-1!](https://javafacil.net/wp-content/uploads/2022/11/php-login-example-1.png)

## 2:
![PHP-LOGIN-PAGE-2!](https://javafacil.net/wp-content/uploads/2022/11/php-login-example-2.png)
