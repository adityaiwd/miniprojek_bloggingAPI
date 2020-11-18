# mini_blog (Project Praktikum Pemrograman Integratif)

KELOMPOK 5
1. Aditya Dwi Wicaksono/185150700111010
2. Azzamudien Hanifa/185150707111008
3. Fathin Al Ghifari/185150707111007
4. Fauzidan Iqbal Ghiffari/185150707111003
5. Kevin Renjiro/185150700111005
6. Oceandra Audrey/185150701111007

## Penjelasan Mini Project
Pada Mini Project ini. Kami diberi tugas untuk membuat sebuah API Project Sederhana yang dapat melakukan CRUD dengan Database MySQL. Projek ini menggunakan Framework Lumen Laravel. Berikut yang sudah dilakukan dari Projek ini.

## Pembuatan CRUD Blog

### Pembuatan database dan Environment Setup
Pada tahap ini, dilakukan pembuatan database MySQL sesuai dengan database masing-masing menggunakan XAMPP dan dilanjutkan dengan penyesuaian data-data pada file .env dengan yang ada pada database.

### Membuat Migration
Pembuatan tabel "mini_blog" disertai kolom-kolomnya dan tipe data dari setiap kolom tabel pada database yang sudah dibuat dengan menggunakan perintah migration.

### Membuat dan Melakukan Seed
Mengisi tabel "mini_blog" pada database dengan data-data yang disediakan dari modul dan mengisinya pada database/seeders/DatabaseSeeder.php, lalu menggunakan perintah seed agar data-data yang ada pada DatabaseSeeder.php tersimpan pada database.

### Pembuatan Model dan Pemanggilan data melalui model
Dengan membuat model data-data yang ada pada tabel dapat di definisikan pada program. Kemudian data-data model yang sudah dibuat dapat dipanggil menggunakan controller, agar data-data tersebut dapat ditampilkan pada program.

### Fungsi CRUD (Create, Read, Update, Delete)
Dengan adanya fungsi ini, dapat melakukan pembuatan, pembacaan, pembaruan, dan penghapusan data yang ada di tabel pada database melalui API lumen yang sudah dibuat.

## Penambahan Otentikasi JWT

### Membuat Migration
Pembuatan tabel "authos" disertai kolom-kolomnya dan tipe data dari setiap kolom tabel pada database "bookapp_lumen" dengan menggunakan perintah migration.

### Pembuatan Model dan Pemanggilan data melalui model
Dengan membuat model data-data yang ada pada tabel dapat di definisikan pada program. Kemudian data-data model yang sudah dibuat dapat dipanggil menggunakan controller, agar data-data tersebut dapat ditampilkan pada program.

### Fungsi CRUD (Create, Read, Update, Delete)
Dengan adanya fungsi ini, dapat melakukan pembuatan, pembacaan, pembaruan, dan penghapusan data yang ada di tabel pada database melalui API lumen yang sudah dibuat.
