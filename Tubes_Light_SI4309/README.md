
+ Eksport dulu databasenya (tubeswad.sql) atau buat database secara manual dengan nama **tubeswad**

    - Jika membuat database secara manual, yang harus dilakukan selanjutnya adalah migrasi

    ```bash
        php artisan migrate:fresh --seed
    ```

+ Jika gambar tidak muncul jalankan `php artisan storage:link` dan jika gagal hapus dulu folder `storage` di `public`.
