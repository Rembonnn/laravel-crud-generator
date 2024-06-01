# Laravel CRUD Generator
Laravel CRUD Generator adalah alat yang kuat dan fleksibel yang dirancang untuk mempermudah pembuatan operasi CRUD (Create, Read, Update, Delete) di aplikasi Laravel. Paket ini memungkinkan pengembang untuk menghasilkan sumber daya CRUD yang sepenuhnya berfungsi, termasuk model, kontroler, tampilan, dan rute, dengan sedikit usaha. Dengan memanfaatkan paket ini, Anda dapat mengurangi waktu dan usaha yang diperlukan untuk mengatur fungsionalitas CRUD dalam proyek Laravel Anda, sehingga Anda dapat lebih fokus pada pembangunan fitur dan memberikan nilai tambah.

## Features
- **Generasi CRUD Otomatis**: Dengan cepat menghasilkan operasi CRUD untuk model apa pun dengan satu perintah Artisan.
- **File Stub yang Dapat Disesuaikan**: Mudah menyesuaikan kode yang dihasilkan dengan memodifikasi file stub yang disediakan agar sesuai dengan kebutuhan spesifik proyek Anda.
- **Dukungan untuk Berbagai Jenis Field**: Secara otomatis menangani jenis field umum seperti teks, email, kata sandi, textarea, dan file.
- **Integrasi DataTables**: Pilihan untuk menyertakan kode yang dihasilkan untuk DataTables, menyediakan tampilan tabel yang interaktif dan kuat.
- **Aturan Validasi**: Secara otomatis menghasilkan aturan validasi berdasarkan spesifikasi Anda untuk memastikan integritas data.
- **Integrasi Bootstrap**: Menghasilkan tampilan CRUD dengan Bootstrap untuk antarmuka pengguna yang responsif dan menarik secara visual.
- **Konfigurasi yang Ramah Pengguna**: Opsi konfigurasi sederhana memungkinkan Anda menyesuaikan proses generasi sesuai kebutuhan Anda.
- **Dokumentasi Komprehensif**: Dokumentasi dan contoh yang terperinci untuk membantu Anda memulai dengan cepat dan memaksimalkan penggunaan paket.

## Connection Support
- PostgreSQL `pgsql`

## Installation
Untuk menginstal paket Laravel CRUD Generator, jalankan perintah berikut:

```sh
composer require rembon/laravel-crud-generator
```

setelah package sukses terinstall, perlu dilakukan registrasi service provider dan publishing asset, maka silahkan jalankan perintah berikut:

daftarkan service provider pada file `config/app.php`

```php
'providers' => [
    /*
    * Laravel Framework Service Providers...
    */
    ...

    /*
    * Package Service Providers...
    */
    \Rembon\LaravelCrudGenerator\LaravelCrudGeneratorServiceProvider::class,

    /*
    * Application Service Providers...
    */
    ...
],
```

```sh
php artisan vendor:publish --tag=public
```

```sh
php artisan vendor:publish --tag=stubs
```

apabila anda menginstall fresh laravel project, jangan lupa untuk mengisi value file `.env`
```php
DB_CONNECTION=pgsql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

terakhir jalankan `optional`:
```sh
php artisan composer:dump-autoload
```

```sh
php artisan optimize:clear
```

## How to Use
terdapat 2 cara dalam menggunakan package ini

### Lewat Terminal
```sh
php artisan crud:generate {name} {--table= : Table} {--schema= : Schema} {--form= : Form} {--datatable= : Table}
```

Deskripsi:
- `name` Nama Model
- `table` Nama Tabel
- `schema` Nama Schema, kalau ingin default schema, bisa diisi dengan value `public`
- `form` flag ini memiliki format tersendiri, berikut adalah contoh format `row:type,row:type`
- `datatable` flag ini memiliki nilai boolean 0 mewakili `false` dan 1 mewakili `true`

### Lewat Halaman CRUD Generator
silahkan kunjungi route berikut: /crud

## Credits
- [Rembon Karya Digital](https://github.com/rembonnn)
- [DayCod](https://github.com/dayCod)
- [Tegar Kurniawan](https://github.com/tegarkurniawan)
- [Aang Wiadi](https://github.com/wiadiaang)
- [See All Contributors](https://github.com/rembonnn/sync-collection/contributors)

## Contribution
- Untuk Panduan Kontribusi Silahkan Kunjungi Tautan ini, [klik disini](https://github.com/Rembonnn/laravel-crud-generator/blob/master/contribution-guide.md)
