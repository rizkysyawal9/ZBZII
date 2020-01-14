Ini adalah panduan untuk testing di database local masing-masing, lakukan langkah2 tsb 
setelah clone web tersebut. 

1. run composer install di terminal
2. Buat database kosong di phpmyadmin/mySQL, nama tabelnya boleh apapun 
3. Bikin file .env dan copy contentsnya sbb: 

//Ini Konten .env 

APP_NAME=ZeenByZee
APP_ENV=local
APP_KEY=base64:zntjaSGjY5u/MrIeTplNDjSzOvZkldX8p/uIBI+XBfM=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zbz
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=cookie
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=92261714055126
MAIL_PASSWORD=477cf5195fa417
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

//Ini akhir dari konten .env

4. Bikin file .gitignore kontennya adalah sbb: 

//Ini awal konten Git Ignore 

/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.phpunit.result.cache
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log

//Ini Akhir dari konten

5. Di file env. ganti nama databasenya sesuai dengan database yang kamu buat (di nomor 1)
6. di terminal, Run composer require laravel/ui
7. di terminal, run php artisan migrate (pastikan tidak ada error, kalau ada error, run php artisan migrate:rollback,
lalu cek di folder database/migrations dan cek apakah relasinya sudah benar atau cek mySQL anda)
8. di terminal, run php artisan db:seed 
9. di terminal, run composer require hardevine/shoppingcart
10. di terminal, run npm install
11. di terminal, run npm run dev 
12. di terminal, run php artisan serve
