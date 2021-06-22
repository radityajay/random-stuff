# Random Stuff

Ini adalah sebuah project akhir kami untuk mata kuliah Basis Data Lanjutan, yaitu sebuah website retail yang menjual berbagai macam pakaian, mulai dari laki-laki, perempuan hingga pakaian formal. Disini kita menggunakan HTML, CSS, dan Bootstrap untuk membangun website kami. Di dalam website, kalian bisa melihat semua barang yang Random Stuff jual. Jika kalian ingin lebih tau banyak tentang Bootstrap, langsung saja ke website resminya [Disini](https://getbootstrap.com/).

## Requirement

- XAMPP

Jika kalian belum menginstall XAMPP kalian bisa download [disini](https://www.apachefriends.org/download.html).

## Installation

1. Install XAMPP
2. Jika sudah menginstall XAMPP akan ada folder xampp di Data(C:) yang lokasinya sudah default disana
3. buka folder xampp, di dalam folder tersebut cari folder htdocs lalu paste projek yang  sudah didownload di dalam folder htdocs
4. di dalam folder projek kita terdapat file SQL yang nantinya akan diimport melalui localhost/phpmyadmin
5. Kalau ingin membukanya di browser XAMPP harus hidup, lokasi data yang ingin kita run sudah tepat seperti yang nomer 3, setelah itu di browser ketikan localhost/random-stuff
6. jika ingin mengakses admin ketikan localhost/random-stuff/login-admin.php username: admin@gmail.com password: admin

## Folder

1. libraries    : Di dalam file terdapat file database untuk menyambungkan database dan model untuk membuat function CRUD
2. models       : Di dalam folder models terdapat files nama-nama tables untuk memanggil nama-nama table diberbagai file.
3. helper       : Untuk function pembantu seperti alert dll.
4. master       : Tempat untuk file template menerapkan model yang sama ke berbagai file.
5. admin        : Terdapat file CRUD table admin.
6. dashboard    : Terdapat file untuk menampilkan dashboard.
7. role         : Terdapat file CRUD table role.
8. brand        : Terdapat file CRUD table brand.
9. kategori     : Terdapat file CRUD table kategori.
10. vendor      : Terdapat file CRUD table vendor.
11. store       : Terdapat file CRUD table store.
12. produk      : Terdapat file CRUD table produk.
13. inventaris  : Terdapat file CRUD table inventaris.
14. bootstraps  : Tempat untuk CSS dan JS disimpan.

## Default Account

**ADMIN**

username: admin@gmail.com 

password: admin

username: petugas@gmail.com

password: petugas

**CUSTOMER**

username: yudhaardana10@gmail.com

password: yudha

username: imadeaguspriatnaputra@gmail.com

password: agus