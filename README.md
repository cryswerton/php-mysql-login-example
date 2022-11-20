# PHP MySQL LOGIN Example
### Prerequisites
LAMP stack fully set up;\
phpmyadmin set up;\
MariaDB database created;\
Table "users" created;

### The "users" table:
``` SQL
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL primary key auto_increment,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
### Create and set up an env.php file based on the example.env.php file. The "APP_NAME" and "HTTP" values can remain blank.
```PHP
<?php

$ENV = [
  "APP_NAME" => "", // No need to fill in that.
  "DB_HOST" => "localhost", // I think there will be no questions here :)
  "DB_PORT" => "", // The port number on which you database is running.It usually is 3306
  "DB_DATABASE" => "", // Your database name
  "DB_USERNAME" => "", // Your database user name. It usually is "root"
  "DB_PASSWORD" => "", // Your database passaword.
  "HTTP" => "http://" // No need to fill in that.
  ];
  
?>
```

## 1:
![PHP-LOGIN-PAGE-1!](https://javafacil.net/wp-content/uploads/2022/11/php-login-example-1.png)

## 2:
![PHP-LOGIN-PAGE-2!](https://javafacil.net/wp-content/uploads/2022/11/php-login-example-2.png)
