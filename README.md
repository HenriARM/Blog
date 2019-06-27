#Scripts for working with application

###Laravel

```shell
php artisan list // show available commands
php artisan make:controller TodosController

php artisan migrate:reset
php artisan migrate

php artisan tinker
```

###Apache on MacOS

* check version of Apache :

```jshelllanguage
httpd -v
```
* working with Apache server :
```jshelllanguage
sudo apachectl start 
sudo apachectl stop  
sudo apachectl restart
apachectl configtest // prints logs
```
* Root directory of Source code:

```jshelllanguage
 /Library/WebServer/Documents 
```

* Root directory of Apache configs

```jshelllanguage
/etc/apache2
```

###Heroku

```jshelllanguage
heroku login

// go into project folder
git init // mandatory
heroku create
heroku addons:add cleardb:ignite
heroku config | grep CLEARDB_DATABASE_URL

heroku logs
heroku ps
```

###MySQL

```jshelllanguage
mysql -u user_name -p // enter into mysql as a user_name
select user, host from mysql.user; // print all users
show tables // list names of all tables

``` 
