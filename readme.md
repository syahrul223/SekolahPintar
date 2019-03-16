# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen adalah mikro framework PHP yang sangat cepat untuk membangun aplikasi web dengan sintaks yang ekspresif dan elegan. Kami percaya pengembangan harus menjadi pengalaman kreatif yang menyenangkan untuk benar-benar memuaskan. Lumen berupaya menghilangkan kejenuhan dari pengembangan dengan meringankan tugas-tugas umum yang digunakan di sebagian besar proyek web, seperti perutean, abstraksi basis data, antrian, dan caching.

## Official Documentation

Dokumentasi framework lebih lanjut bisa di lihat pada link berikut. [Lumen website](https://lumen.laravel.com/docs).

# Frontend

Untuk tampilan Depan, saya menggunakan Vue.js dan Package axios serta vue-router.
Untuk Penginstalan. Saya Menggunakan Vue-CLI 3, bisa anda Lihat langkah penginstalan nya dibawah ini

# vuefrontend

## Project setup
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

### Run your tests
```
npm run test
```

### Lints and fixes files
```
npm run lint
```

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).

# Aplikasi Sekolah Pintar

Jadi, web ini hanya untuk memasukan data guru dan mata pelajaranya.

untuk pengerjaan, saya hanya menggunakan 2 tabel dari database saja.

![Web Sekolah Pintar](https://raw.githubusercontent.com/syahrul223/SekolahPintar/image/DataGuru.png)
![Web Sekolah Pintar](image/DataPelajaran.png)

bisa dilihat dari gambar diatas, terdapat 2 tombol di pojok atas. tombol tersebut merupakan sebuah
routing untuk ke sebuah halaman. Tapi, tidak perlu meload untuk mengakses halaman tersebut.

Untuk work tree nya bisa dilihat pada gambar berikut

![Worktree1](image/WorkTreeLumen.png)

Untuk frontend nya...

![Worktree2](image/WorkTreeFrontend.png)

Untuk penjelasan aplikasi nya, mari kita simak baik-baik :)

## CRUD data Mata Pelajaran

Dibawah ini merupakan Operasi Create, Update, dan Delete pada data Mata Pelajaran

### Menambah Data Mata Pelajaran
![1](image/tambahPelajaran/1.png)

Tekan button yang ada dibawah tabel.

![2](image/tambahPelajaran/2.png)

Isi Formulir Data Mata Pelajaran.

![3](image/tambahPelajaran/3.png)

Apabila Sudah Selesai, maka submit formulir

![4](image/tambahPelajaran/4.png)

Maka Data yang tadi ditambahkan akan tercantum pada Tabel Mata Pelajaran

### Mengubah Data Mata Pelajaran
![1](image/ubahPelajaran/1.png)

Pilih Data mana yang akan diubah, apabila sudah memilih maka tekan button edit pada gambar diatas

![2](image/ubahPelajaran/2.png)

Maka, akan tersedia form dan inputnya akan terisi oleh data sebelumnya

![3](image/ubahPelajaran/3.png)

Ubahlah data tersebut, apabila sudah maka submit data tersebut

![4](image/ubahPelajaran/4.png)

Data akan terubah dengan semestinya

### Menghapus Data Mata Pelajaran

![1](image/hapusPelajaran/1.png)

Pilih Data Mana yang akan dihapus, lalu tekan button seperti gambar diatas

![2](image/hapusPelajaran/2.png)

Data Telah Terhapus

## CRUD data Guru

Dibawah ini merupakan Operasi Create, Update, dan Delete pada data Guru

### Menambah Data Guru
![1](image/tambahGuru/1.png)

Tekan button yang ada dibawah tabel.

![2](image/tambahGuru/2.png)

Isi Formulir Data Guru.

![3](image/tambahGuru/3.png)

Apabila Sudah Selesai, maka submit formulir

![4](image/tambahGuru/4.png)

Maka Data yang tadi ditambahkan akan tercantum pada Tabel Daftar Guru

### Mengubah Data Guru
![1](image/ubahGuru/1.png)

Pilih Data mana yang akan diubah, apabila sudah memilih maka tekan button edit pada gambar diatas

![2](image/ubahGuru/2.png)

Maka, akan tersedia form dan inputnya akan terisi oleh data sebelumnya

![3](image/ubahGuru/3.png)

Ubahlah data tersebut, apabila sudah maka submit data tersebut

![4](image/ubahGuru/4.png)

Data akan terubah dengan semestinya

### Menghapus Data Guru

![1](image/hapusGuru/1.png)

Pilih Data Mana yang akan dihapus, lalu tekan button seperti gambar diatas

![2](image/hapusGuru/2.png)

Data Telah Terhapus

Cukup sekian Keterangan mengenai aplikasi project ini
Terima Kasih dan Semoga Bermanfaat :)
