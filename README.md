<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

CREATE TABLE user (                           # Tabel user digunakan untuk menampung data-data pihak 
                                                yang terlibat di dalam aplikasi Inpos
    id_pos VARCHAR(20) PRIMARY KEY NOT NULL,  # Atribut id_pos menampung data Nippos tiap pihak,    
                                                digunakan sebagai primary key
    nama VARCHAR(50),                         # Atribut nama menyimpan data nama lengkap tiap pihak
    jabatan VARCHAR(50),                      # Atribut jabatan menyimpan posisi masing-masing pihak
    password VARCHAR(50),                     # Atribut password menyimpan password users yang akan 
                                                dibuat, disimpan, dan diinput di website Inpos 
    level INT(12)                             # Atribut level menyimpan tingkat otoritas tiap user di   
                                                website, setiap level melambangkan seberapa banyak 
                                                tindakan dapat dilakukan dan page yang dapat       
                                                ditampilkan oleh masing-masing user
);

CREATE TABLE file (                                   # Tabel file digunakan untuk menampung seluruh 
                                                        berkas yang diinputkan oleh sekretaris (admin) 
                                                        lalu untuk kemudian diproses
    nomor_surat VARCHAR(50) PRIMARY KEY NOT NULL,     # Atribut nomor_surat digenerate secara otomatis  
                                                        sesuai nama KCP, tanggal, dan nomor urut, 
                                                        dijadikan sebagai primary key 
    nama_file VARCHAR(50),                            # Atribut nama_file berisi nama_file yang         
                                                        digenerate secara otomatis dengan tanggal dan 
                                                        nomor urut, lalu berisi nama file
    tanggal DATE,                                     # Atribut tanggal berisi informasi waktu file 
                                                        ketika diupload di website
    file VARCHAR(255),                                # Atribut file berisi berkas yang diupload oleh   
                                                        sekretaris (admin)
    id_pos VARCHAR(20),                               # Atribut id_pos merupakan foreign key yang diambil 
                                                        dari tabel user untuk mengidentifikasi berkas 
                                                        file yang diupload ditujukan ke divisi/pihak mana
    FOREIGN KEY (id_pos) REFERENCES user(id_pos)
);

CREATE TABLE disposisi (                                      # Tabel disposisi digunakan untuk menampung 
                                                                seluruh berkas yang diaposisikan ke pihak 
                                                                tujuan sesuai kebutuhan dan keperluan
    id_disposisi VARCHAR(50) PRIMARY KEY NOT NULL,            # Atribut id_disposisi menyimpan nomor urut 
                                                                berkas yang diaposisikan
    perihal VARCHAR(50),                                      # Atribut perihal berisi maksud dan tujuan 
                                                                diberlakukannya disposisi terhadap berkas 
                                                                terkait
    catatan VARCHAR(50),                                      # Atribut catatan digunakan untuk menyimpan 
                                                                catatan tambahan dari file aposisi
    status INT(12),                                           # Atribut status memberikan nilai integer 
                                                                yang mewakilkan status berkas yang telah 
                                                                diaposisi, misal nilai 0 mengindikasikan 
                                                                berkas telah dibaca
    divisi VARCHAR(50),                                       # Atribut divisi berisi nama-nama divisi 
                                                                yang ada, disposisi bisa saja ditunjukkan 
                                                                ke salah satu divisi ataupun ke seluruh
    nomor_surat VARCHAR(50),                                  # Atribut nomor_surat merupakan foreign key 
                                                                dari tabel file, mengidentifikasi surat 
                                                                yang telah diinput dan didisposisi sesuai 
                                                                kebutuhan
    FOREIGN KEY (nomor_surat) REFERENCES file(nomor_surat)
);