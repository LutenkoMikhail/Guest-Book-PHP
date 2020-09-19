Необходимо создать приложение гостевая книга.

Написать на чистом php + mysql гостевую книгу.
Каждый пользователь может оставлять комментарии.
Админ может проверять их и апрувить.
Заапрувленные отображаются в гостевой книге.


Тестовая база данных: guestbook.sql;

Настрой подключения в базе данных:
Config\database.php;

Скрипт для таблиц базы данных:
Database\migrations\user.sql;
Database\migrations\post.sql;

Сиды:
Database\seeds\user.sql;
Database\seeds\post.sql;

Пароль для админа:
Name - admin;
Password - 123;

Установка:
composer dumpautoload;

Использованы:
php ;
mysql;
bootstrap;

Стартовая страница:
public\index.php;

