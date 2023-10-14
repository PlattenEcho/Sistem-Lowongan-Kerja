# SISTEM LOWONGAN PEKERJAAN

Ini adalah sistem agar pencari kerja dapat mencari pekerjaan dengan mudah

**SEDANG DALAM PENGEMBANGAN**

# SETUP SISTEM AWAL

### SETUP LARAVEL

1. Clone project ini ke direktori Anda
2. Pindah ke folder project menggunakan

    ```
    cd <proyek-Anda>
    ```

3. Install composer dengan kode berikut

    ```
    composer install
    ```

4. Salin file `.env.example` dan ubah dengan nama `.env`. Gunakan kode ini agar lebih mudah

    ```
    cp .env.example .env
    ```

5. Buka file `.env` dan sesuaikan konfigurasi database Anda, seperti mengubah nama database pada `DB_DATABASE`, username pada `DB_USERNAME`, dan password pada `DB_PASSWORD`.

6. Jalankan perintah ini di terminal

    ```
    php artisan key:generate
    ```

7. Jalankan perintah ini di terminal

    ```
    php artisan migrate:fresh --seed
    ```

### SETUP TAILWIND

1. Jalankan perintah ini di terminal
    ```
    npm install
    ```

### MENJALANKAN APLIKASI

1. Buka 2 terminal di direktori project

2. Jalankan perintah ini di terminal pertama, **JANGAN TUTUP TERMINAL**

    ```
    php artisan serve
    ```

3. Jalankan perintah ini di terminal kedua, **JANGAN TUTUP TERMINAL**

    ```
    npm run dev
    ```

4. Buka tautan yang dibuat setelah menjalankan `php artisan serve`
