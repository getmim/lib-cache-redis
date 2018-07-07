# lib-cache-redis

Adalah add-on untuk module `lib-cache` untuk memungkinkan penggunaan
redis sebagai data penyimpanan cache. Module ini membutuhkan module
`lib-redis` dan `lib-cache` terinstall.

## instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install lib-cache-redis
```

Intalasi module ini akan menyediakan cache dengan driver file. Untuk
dukungan cache driver redis, atau yang lainnya, silahkan instal module
yang bersangkutan.

## penggunaan

Dikarenakan module ini adalah module addons untuk `lib-cache`, maka penggunaan
pada kontroler tidak berbeda sama sekali dengan `lib-cache`.

Pastikan men-set konfigurasi aplikasi seperti di bawah agar `lib-cache` menggunakan
library ini sebagai storage cache handler.

```php
    ...,
    'libCache' => [
        'driver' => 'redis'
    ]
    ...,
```

Pastikan juga terdapat koneksi redis di konfigurasi aplikasi dengan nama `cache`:

```php
return [
    'libRedis' => [
        'cache' => [
            // 'socket' => '/tmp/redis.sock',
            'host' => '127.0.0.1',
            'port' => '6379',
            'password' => '',
            'db' => 2,
            // key prefix
            'prefix' => ''
        ]
    ]
];
```