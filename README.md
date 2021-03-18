# PrakPWL
Nama 	: Daniel Sipangkar
Nim	: 118140080
Praktikum PWL
1.	Oauth 2: Facebook
2.	Login Biasa
3.	Penjelasan program
 
Penjelasan Program

1.	Pertamasekali yang dilakukan adalah login pada facebook developer melalui https://developers.facebook.com/?locale=id_ID
2.	Kemudian masuk ke Aplikasi Saya
3.	Kemudian klik Create App
4.	Selanjutnya pilih Setting->basic, untuk mendapatkan App ID dan App Secret. Jangan lupa isi app domain dan pilih platform di paling bawah. Disini saya menggunakan platform web
5.	Kemudian pilih prooduct untuk menambahkan fitur facebook login.
6.	Kemudian pilih facebook login -> setting, lalu isi Valid Oauth Redirect URIs. Link ini merupakan link dari app yang akan kita buat fitur login facebook nya
7.	Selanjutnya saya membuat database untuk login biasa dengan username=”user” dan password=”12345”

Koneksi.php, tempat untuk mengkoneksikan database ke website yang kita buat
Config.php bertujuan untuk membuat link pada login fb
Admin/index.php  adalah tampilan setelah login biasa/login fb dan terdapat fitur loginnya
Admin/logout.php adalah fitur untuk melakukan logout dan menghapus session loginnya.
Index.php, merupakan tampilan login default yang dalamnya terdapat login biasa dan login fb. Login fb diperoleh dari include melalui config.php. sedangkan akun login biasanya didapat dari database pada prakpwl1.sql melalui include koneksi.php. 




