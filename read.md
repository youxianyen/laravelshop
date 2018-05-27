1.composer install -vvv


然后把 .env.example改名为.env;
生成APP_KEY；

php artisan key:generate
把 .env 文件中的 APP_URL 改为自己的域名；
把 .env 文件中的 DB_HOST、DB_PORT、DB_DATABASE、DB_USERNAME、DB_PASSWORD；
改为自己的数据库链接； 运行迁移命令；

新建数据库后运行命令设置编码，防止报错mysql 索引过长1071-max key length is 767 byte
SET NAMES 'utf8';

然后，在根目录，git bash窗口运行
php artisan migrate
运行数据填充命令;

php artisan db:seed

查看laravel版本
php artisan --v

php artisan make:controller IndexController

