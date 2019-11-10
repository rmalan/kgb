# Introduction
e-KGB merupakan salah satu Layanan Elektronis Kepegawaian yang dimiliki oleh BKD Provinsi Bengkulu. e-KGB berfungsi untuk membantu pengolahan kenaikan gaji berkala secara otomatis, cepat, dan akurat.<br/>
e-KGB dibangun dengan menggunakan framework CodeIgniter 3 dan database MySQL.
# Requirements
* PHP >= 7.0
* Composer
# Installation
* Kloning repo: `git clone https://github.com/rmalan/kgb.git`
* Jalankan perintah: `composer update`
# Manual Program
1. Masuk ke <b>Nominatif</b> > <b>Daftar Nominatif</b>, pilih pegawai yang akan diproses KGBnya, kemudian pada kolom aksi klik tombol <b>KGB</b>.
2. Akan tampil modal bootstrap Berkas KGB, lakukan ceklis pada kelengkapan berkas yang dimiliki oleh pegawai. Jika berkas yang dimiliki oleh pegawai lengkap klik tombol <b>Form KGB</b>, jika tidak tidak lengkap klik tombol <b>Tunda KGB</b>.
3. Kemudian sistem akan melakukan proses KGB dan akan diredirect ke halaman form KGB. Field-field pada form KGB sudah otomatis terisi berdasarkan data KGB pegawai sebelumnya. Field pada form KGB tidak bersifat readonly, sehingga masih bisa dilakukan perubahan jika terdapat data yang belum sesuai. Jika data pada semua field sesuai, klik tombol <b>Proses KGB</b>, agar data KGB yang baru pegawai tersimpan dan terdata ke dalam database.
4. KGB baru pegawai telah selesai diproses. Jika ingin mencetak SK KGB yang baru klik tombol <b>Cetak</b>, jika telah selesai klik tombol <b>Selesai</b>.
# Features
- Gaji Pokok
- Konfigurasi SK
- Nominatif Manual
- Riwayat KGB
- Riwayat Proses
# Demo
Username : kgboperator/kgbopd/kgbpegawai (silahkan pilih salah satu aja :))<br/>
Password : kgb<br/>