Ini adalah panduan untuk testing di database local masing-masing, lakukan langkah2 tsb 
setelah clone web tersebut. 

1. Buat database kosong di phpmyadmin/mySQL, nama tabelnya boleh apapun 
2. Di file env. ganti nama databasenya sesuai dengan database yang kamu buat (di nomor 1)
3. di terminal, run php artisan migrate (pastikan tidak ada error, kalau ada error, run php artisan migrate:rollback,
lalu cek di folder database/migrations dan cek apakah relasinya sudah benar atau cek mySQL anda)
4. di terminal, run php artisan db:seed 
5. di terminal, run composer require hardevine/shoppingcart
6. Lalu jalankan web dengan php artisan serve
