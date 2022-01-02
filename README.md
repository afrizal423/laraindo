<p align="right">
بِسْــــــــــــــمِ اللَّهِ الرَّحْمَنِ الرَّحِيم 
</p>

# Laraindo
Package Laravel sederhana untuk format indonesia terdiri dari :
- Localization(locale)
- Rupiah format dan terbilang
- Date format

## Instalasi
Yang dibutuhkan dalam menjalankan package ini:
<b>
- Minimal PHP v8.0.2
- Laravel 9.x 
</b>

Jalankan perintah dibawah untuk memasang pada projek kamu.
```bash
composer require afrizalmy/laraindo
```
_*pastikan sudah menginstall composer di device kalian._

Setelah itu lalukan publish provider  
```sh
php artisan vendor:publish --provider='Laraindo\LaraindoServiceProvider'
```
### Localization(locale)
Untuk mengaktifkan locale, silahkan buka file config/app.php.
Cari ```locale``` dan ```fallback_locale```, lalu ubah value menjadi ```id```
```php
    // file config/app.php
    'locale' => 'id',

    'fallback_locale' => 'id',
```

## How to use
- Rupiah format
    - melalui controller atau model
        ```php
        use Laraindo\RupiahFormat; //import

        RupiahFormat::currency(1000000);
        // Rp. 1.000.000
        ```
    - melalui blade
        ```php
        @RupiahFormat(1000000)
        // Rp. 1.000.000
        ```
- Terbilang Rupiah
    - melalui controller atau model
        ```php
        use Laraindo\RupiahFormat; //import

        RupiahFormat::terbilang(1000000);
        // Satu Juta Rupiah
        ```
    - melalui blade
        ```php
        @RupiahTerbilang(1000000)
        // Satu Juta Rupiah
        ```
- Date format
    - melalui controller atau model
        ```php
        use Laraindo\TanggalFormat; //import

        TanggalFormat::DateIndo('1945/08/17 10:00:00')
        //Jumat, 17 Agustus 1945

        // custom format
        TanggalFormat::DateIndo('1945/08/17 10:00:00','l, j F Y H:i:s a')
        //Jumat, 17 Agustus 1945 10:00:00 pagi
        ```
    - melalui blade 
        ```php
        @DateIndo('1945/08/17 10:00:00')
        //Jumat, 17 Agustus 1945

        @DateIndo('1945/08/17 10:00:00',"l, j F Y H:i:s a")
        //Jumat, 17 Agustus 1945 10:00:00 pagi
        ```
    **Catatan**:
    Jika ingin mengganti time zone, silahkan buka ```config/laraindo.php```, ubah bagian timezone. Indonesia memiliki [3 timezone](https://greenwichmeantime.com/time/indonesia/), yaitu:
    - Asia/Jakarta (GMT +07:00)
    - Asia/Makassar (GMT +08:00)
    - Asia/Ambon (GMT +09:00)

## Kontribusi
Silahkan ke halaman issue berikan untuk penjelasan lebih lanjutnya.
Saya menerima dengan baik kontribusi kamu untuk package ini.

## Support Me
Dukung aku [https://saweria.co/afrizalmy](https://saweria.co/afrizalmy)


