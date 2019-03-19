<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

### Installation:

1.  Make a copy of the .env.example
    ```bash
    cp .env.example .env
    ```
    ...and fill fields:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laraveluser
    DB_PASSWORD=your_laravel_db_password

    DOCKER_PREFIX=skeleton
    ```
2. Install composer dependency, run: 
    ```bash
    sudo usermod -a -G docker $USER #Add permission
    make composer_dep
    ```
3. Set permissions on the project directory so that it is owned by your non-root user:
    ```bash
    sudo chown -R $USER:$USER $PWD
    ```

4.  Set the application key for the Laravel application
    ```bash
    make key
    ``` 
5. Optional* >> To cache these settings into a file, which will boost your application's load speed, run:   
    ```bash
    docker-compose exec app php artisan config:cache
    ```
    _Your configuration settings will be loaded into /var/www/bootstrap/cache/config.php on the container._
    
6.  Creating a User for MySQL
    * Inside the container:
    ```bash
    docker-compose exec db bash
    
    root@e42d3f4adfg:/# mysql -u root -p

    mysql> GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';
    mysql> FLUSH PRIVILEGES;
    mysql> EXIT;

    ```
    Dump DB
    ```bash
    mysqldump -u root -p laravel > /etc/mysql/laravel
    ```
    
     [See more https://github.com/francescomalatesta/laravel-api-boilerplate-jwt](https://github.com/francescomalatesta/laravel-api-boilerplate-jwt).
    
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
