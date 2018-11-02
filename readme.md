- [see](https://laracasts.com/series/real-time-laravel-with-socket-io/episodes/1)


 - install dependencies
     ```sh
     composer install
     yarn
     ```
 - create and customize .env file and (if needed) the .htaccess file
     ```sh
     cp .env.example .env
     cp ./public/.htaccess.example ./public/.htaccess
     ```
 - launch redis e socket server
     ```sh
     npm start
     ```
 - emit message
     ```sh
     http://APP_URL/laravel_redis_socket/public/redis
     ```
 - see messages
     ```sh
     http://APP_URL/laravel_redis_socket/public/
     ```

- redis is installed locally. to install it separately:
     ```sh
    wget http://download.redis.io/releases/redis-4.0.9.tar.gz
    tar xzf redis-4.0.9.tar.gz
    cd redis-4.0.9
    make
     ```