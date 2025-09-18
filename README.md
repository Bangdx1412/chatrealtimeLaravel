1.ENV 
    =>Tạo DB

2.Cấu hình Pusher(trong file env)
    BROADCAST_DRIVER=pusher

    PUSHER_APP_ID=""
    PUSHER_APP_KEY=""
    PUSHER_APP_SECRET=""
    PUSHER_APP_CLUSTER=

3. Chạy lệnh 
    php artisan migrate
    php artisan db:seed
    composer require laravel/ui
    php artisan ui bootstrap
    php artisan ui bootstrap --auth

    composer require pusher/pusher-php-server

    npm i
    
    php artisan serve
    npm run dev