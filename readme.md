Pusing Submodulenya :V

Baca Sampai Selesai :)

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

![DataGuru](https://user-images.githubusercontent.com/42232274/54476651-729d8000-4832-11e9-90cd-b925b1b78a0c.PNG)
![DataPelajaran](https://user-images.githubusercontent.com/42232274/54476685-e3449c80-4832-11e9-9b9b-c7e4e9aadf6e.PNG)

bisa dilihat dari gambar diatas, terdapat 2 tombol di pojok atas. tombol tersebut merupakan sebuah
routing untuk ke sebuah halaman. Tapi, tidak perlu meload untuk mengakses halaman tersebut.

Untuk work tree nya bisa dilihat pada gambar berikut

![WorkTreeLumen](https://user-images.githubusercontent.com/42232274/54476708-0ec78700-4833-11e9-8b5b-f55ec3202784.PNG)

Untuk frontend nya...

![WorkTreeFrontend](https://user-images.githubusercontent.com/42232274/54476720-269f0b00-4833-11e9-862c-4f17bf7bde17.PNG)

Untuk penjelasan aplikasi nya, mari kita simak baik-baik :)

## CRUD data Mata Pelajaran

Dibawah ini merupakan Operasi Create, Update, dan Delete pada data Mata Pelajaran

### Menambah Data Mata Pelajaran
![1](https://user-images.githubusercontent.com/42232274/54476751-8a293880-4833-11e9-99ab-89e0f23b611b.PNG)

Tekan button yang ada dibawah tabel.

![2](https://user-images.githubusercontent.com/42232274/54476754-8f868300-4833-11e9-89f6-d88375bea883.PNG)

Isi Formulir Data Mata Pelajaran.

![3](https://user-images.githubusercontent.com/42232274/54476756-957c6400-4833-11e9-9a4f-13a67e408803.PNG)

Apabila Sudah Selesai, maka submit formulir

![4](https://user-images.githubusercontent.com/42232274/54476757-9f05cc00-4833-11e9-8cea-236260d77a3f.PNG)

Maka Data yang tadi ditambahkan akan tercantum pada Tabel Mata Pelajaran

### Mengubah Data Mata Pelajaran
![1](https://user-images.githubusercontent.com/42232274/54476779-d1172e00-4833-11e9-81be-db50f96d4276.PNG)

Pilih Data mana yang akan diubah, apabila sudah memilih maka tekan button edit pada gambar diatas

![2](https://user-images.githubusercontent.com/42232274/54476781-d1172e00-4833-11e9-8c53-589c1f05fdc3.PNG)

Maka, akan tersedia form dan inputnya akan terisi oleh data sebelumnya

![3](https://user-images.githubusercontent.com/42232274/54476782-d1afc480-4833-11e9-8402-f6d348dce795.PNG)

Ubahlah data tersebut, apabila sudah maka submit data tersebut

![4](https://user-images.githubusercontent.com/42232274/54476783-d1afc480-4833-11e9-8830-f5c679d3d745.PNG)

Data akan terubah dengan semestinya

### Menghapus Data Mata Pelajaran

![1](https://user-images.githubusercontent.com/42232274/54476807-03289000-4834-11e9-91bb-15e08665df5f.PNG)

Pilih Data Mana yang akan dihapus, lalu tekan button seperti gambar diatas

![2](https://user-images.githubusercontent.com/42232274/54476808-03289000-4834-11e9-9f2a-e3a0fcde0c78.PNG)

Data Telah Terhapus

## CRUD data Guru

Dibawah ini merupakan Operasi Create, Update, dan Delete pada data Guru

### Menambah Data Guru
![1](https://user-images.githubusercontent.com/42232274/54476823-1dfb0480-4834-11e9-9a06-89be973ed9a0.PNG)

Tekan button yang ada dibawah tabel.

![2](https://user-images.githubusercontent.com/42232274/54476824-1e939b00-4834-11e9-8fdc-6926044b1d35.PNG)

Isi Formulir Data Guru.

![3](https://user-images.githubusercontent.com/42232274/54476825-1e939b00-4834-11e9-9119-a2cac7fb839f.PNG)

Apabila Sudah Selesai, maka submit formulir

![4](https://user-images.githubusercontent.com/42232274/54476826-1f2c3180-4834-11e9-910b-fa54093eedeb.PNG)

Maka Data yang tadi ditambahkan akan tercantum pada Tabel Daftar Guru

### Mengubah Data Guru
![1](https://user-images.githubusercontent.com/42232274/54476837-48e55880-4834-11e9-9cda-92068151975d.PNG)

Pilih Data mana yang akan diubah, apabila sudah memilih maka tekan button edit pada gambar diatas

![2](https://user-images.githubusercontent.com/42232274/54476838-497def00-4834-11e9-9353-9ac8ffb17df9.PNG)

Maka, akan tersedia form dan inputnya akan terisi oleh data sebelumnya

![3](https://user-images.githubusercontent.com/42232274/54476839-4a168580-4834-11e9-8f0e-f91c1c695d77.PNG)

Ubahlah data tersebut, apabila sudah maka submit data tersebut

![4](https://user-images.githubusercontent.com/42232274/54476840-4a168580-4834-11e9-972f-944fd6d49279.PNG)

Data akan terubah dengan semestinya

### Menghapus Data Guru

![1](https://user-images.githubusercontent.com/42232274/54476870-8fd34e00-4834-11e9-9254-8998a1c555db.PNG)

Pilih Data Mana yang akan dihapus, lalu tekan button seperti gambar diatas

![2](https://user-images.githubusercontent.com/42232274/54476871-906be480-4834-11e9-8031-21523b84f1f2.PNG)

Data Telah Terhapus

Cukup sekian Keterangan mengenai aplikasi project ini
Terima Kasih dan Semoga Bermanfaat :)
