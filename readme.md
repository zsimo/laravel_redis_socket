- (see[https://laracasts.com/series/real-time-laravel-with-socket-io/episodes/1]


 - install dependencies
     ```sh
     composer install
     yarn
     ```
 - launch redis e socket server
     ```sh
     npm start
     ```
 - emit message
     ```sh
     http://brunelleschi/~simone.sacchi/laravel_redis_socket/public/redis
     ```
 - see messages
     ```sh
     http://brunelleschi/~simone.sacchi/laravel_redis_socket/public/
     ```

- redis is installed locally. to install it separately:
     ```sh
    wget http://download.redis.io/releases/redis-4.0.9.tar.gz
    tar xzf redis-4.0.9.tar.gz
    cd redis-4.0.9
    make
     ```