# Kelompok-3-MI2022C-VRS-Website

LAPORAN TUGAS PEMROGRAMAN WEB dokumen WEBSITE VEHICLE RENTAL SERVICE (VRS)

Disusun oleh:
1) Vanessa Aulia Syifa Y.       (22091397084)
2) M. Badar Haula Abdi          (22091397085)
3) Ahmad Balya Diwanullatif     (22091397095)
   

PRODI D4 MANAJEMEN INFORMATIKA

FAKULTAS VOKASI

UNIVERSITAS NEGERI SURABAYA

2023

BAB 1. PENDAHULUAN

1.1 Tujuan Penulisan Dokumen 

Tujuan dari penulisan dokumen ini adalah untuk menggambarkan kebutuhan pengelola rental mobil dan kebutuhan pengguna dalam lingkungan sistem rental. Dokumen ini bertujuan menjadi acuan dan panduan baik bagi pengembang dan pengguna website selama pengembangan website yang akan dibangun. Bagi pengembang, dokumen ini digunakan sebagai acuan dalam setiap tahapan pengembangan agar sesuai dengan kebutuhan yang diinginkan oleh pengguna dan tujuan website itu sendiri. Sementara itu, bagi pengguna, dokumen ini digunakan untuk mencatat semua spesifikasi kebutuhan dari website yang dikembangkan dan harapan yang diinginkan. Dokumen ini berisi spesifikasi kebutuhan dari website rental mobil yang akan dikembangkan. Dokumen ini memberikan gambaran yang spesifik mengenai kebutuhan software dan digunakan sebagai bahan acuan dalam proses pengembangan serta evaluasi website.


1.2 Audien yang Dituju dan Pembaca yang Disarankan

Pengguna yang merupakan individu atau kelompok yang akan menggunakan website yang dikembangkan. Dalam konteks Website rental mobil, pengguna adalah orang-orang yang ingin menyewa mobil. Dan juga rental owner atau pemilik rental mobil adalah individu atau perusahaan yang memiliki dan mengelola bisnis rental mobil. Mereka menyediakan armada mobil yang disewakan kepada pelanggan. Pemilik rental mobil dapat menggunakan perangkat lunak rental mobil untuk memanajemen penggunaan, melacak transaksi, mengatur harga dan tarif, serta mengelola inventaris mobil mereka.


1.3 Batasan Produk

Website Vehicle Rental Service ini adalah situs web yang dirancang khusus untuk memungkinkan pengguna menyewa kendaraan seperti mobil dan motor. 
1.3.1 Tujuan dari website ini:

a. Website ini memungkinkan pelanggan untuk memesan kendaraan secara online, menghemat waktu mereka daripada harus datang langsung ke kantor fisik. Ini memberikan kenyamanan yang lebih besar bagi pelanggan.

b. Memberikan informasi lengkap tentang jenis kendaraan yang tersedia, harga, persyaratan penyewaan, dan lain-lain. Ini membantu pelanggan dalam membuat keputusan yang lebih baik.

c. Memberi fasilitas yang memungkinkan pelanggan untuk mereservasi dan membayar kendaraan secara online. Ini membuat proses pemesanan menjadi lebih lancar dan aman.

1.3.2 Manfaat yang relevan dari website ini:

a. Website ini memungkinkan calon pelanggan untuk mengakses informasi tentang layanan rental kendaraan 24/7, tanpa perlu datang langsung ke kantor fisik. Hal ini memberikan fleksibilitas kepada pelanggan untuk mencari informasi dan memesan kendaraan kapan saja.

b. Perusahaan dapat mempromosikan penawaran khusus, diskon, atau paket-paket tertentu kepada pelanggan melalui website. Hal ini dapat meningkatkan penjualan dan memikat pelanggan yang mencari penawaran terbaik.

c. Perusahaan dapat menerima umpan balik pelanggan melalui website, yang berguna untuk memahami kepuasan pelanggan, mengidentifikasi masalah, dan meningkatkan layanan.

1.3.3 Tujuan Bisnis yang mungkin terkait dengan website ini:

a. Membantu perusahaan rental kendaraan untuk memasarkan dan mengelola bisnis rental kendaraanya sehingga dapat mencapai lebih banyak calon pelanggan. Potensial pelanggan dapat dengan mudah mencari layanan dan harga yang sesuai dengan kebutuhan mereka secara online.

b. Melalui website, rental owner dapat meluncurkan kampanye pemasaran online yang terukur dan memungkinkan mereka untuk menargetkan pelanggan potensial dengan lebih efektif. Ini mencakup penggunaan iklan online, pemasaran email, dan media sosial.

c. Website yang efisien dapat meningkatkan pengalaman pelanggan. Ini bisa mencakup proses pemesanan yang lebih mudah, informasi yang lengkap tentang kendaraan, layanan pelanggan yang responsif, dan fitur pelacakan kendaraan. Memastikan kepuasan pelanggan dapat membantu mempertahankan pelanggan yang ada dan mendapatkan referensi dari mereka.


1.4 Definisi dan Istilah

Website : Website adalah halaman informasi yanng disediakan melalui jalur internet sehingga bisa diakses diseluruh dunia selama terkoneksi dengan jaringan internet. Website juga merupakan komponen atau kumpulan komponen yang terdiri dari teks, gambar, suara, dan animasi sehingga menarik untuk di kunjungi. (Azis Sholechul, 2013)

Rental Owner : Orang yang memiliki kendaraan yang akan disewakan.

Software : Perangkat lunak yang menyimpan sebuah perintah program di dalam komputer yang apabila dijalankan oleh user akan memberikan fungsi dan bekerja sesuai yang diharapkan oleh usernya. (Roger S. Pressman, 2002:10)

1.5 Referensi

Desta. (2022). TUGAS SPESIFIKASI KEBUTUHAN PERANGKAT LUNAK MATA KULIAH REQUIREMENT ENGINEERING.

Kurniana, T. (2022). Software Requirements Specification for Website Bergerak Penjadwalan Distribusi Sembako pada UD. Kuning Mas Palangka Raya. https://www.researchgate.net/publication/360779629

Putri, T. P., Dewi, B. C., Ekasari, N., & Puspitasari, V. (2014). Sistem Informasi Pencatatan Transaksi Rental Mobil Tribal Group.

Samiaji, A., Faturzaman, M. F., Alifah, E., & Girsang, J. E. BR. (2017). DOKUMEN SPESIFIKASI KEBUTUHAN PERANGKAT LUNAK “Website Sistem Informasi Rental Mobil.”

Turangga, K. G., Darmawiguna, I. G. M., & Divayana, D. G. H. (2018). Pengembangan Website Planetarium Berbasis Virtual Reality. Jurnal Nasional Pendidikan Teknik Informatika (JANAPATI), 7(2), 207. https://doi.org/10.23887/janapati.v7i2.12449


BAB 2. DESKRIPSI KESELURUHAN

2.1 Deskripsi Produk

Website Vehicle Rental Service (VRS) yang dijelaskan dalam dokumen ini adalah website pemesanan atau penyewaan kendaraan secara online. Website ini merupakan sebuah produk mandiri baru, bukanlah anggota lanjutan dari keluarga produk yang ada atau pengganti dari sistem yang ada. Website ini dikembangkan sebagai solusi independen untuk memenuhi kebutuhan penggunaan kendaraan bagi perusahaan rental mobil dan motor.
Website ini dapat digunakan untuk menyewa kendaraan seperti mobil, motor, atau sepeda. Fitur-fitur yang terdapat di Website ini, yaitu penjadwalan penggunaan, pembayaran online, pemilihan kendaraan yang sesuai dengan kebutuhan pengguna, dan tracking kendaraan yang disewa. Dengan berbagai fitur yang disediakan, Website Vehicle Rental Service diharapkan dapat membantu bisnis rental mobil atau motor meningkatkan efisiensi dan efektivitas operasionalnya, sehingga dapat meningkatkan keuntungan bisnis dan kualitas layanan yang diberikan.


2.2 Fungsi Produk

Website ini dirancang untuk dapat melakukan beberapa fungsi diantaranya sebagai berikut:

a. Autentikasi (Log in dan Log out) 

b. Kelola Data Kendaraan

c. Penjadwalan penggunaan

d. Pembayaran Online

e. Tracking Kendaraan

f. Pencarian Kendaraan

g. Pemilihan Kendaraan

h. Transaksi Pembayaran

i. Pengambilan dan Pengembalian Kendaraan

Fungsi-fungsi ini membantu menciptakan pengalaman yang lebih baik bagi pelanggan, mempermudah proses pemesanan, dan membantu pemilik rental kendaraan mengelola operasi mereka dengan lebih efisien. Semua ini bertujuan untuk meningkatkan kepuasan pelanggan dan mengoptimalkan hasil bisnis.


2.3 Penggolongan Karakteristik Pengguna
![image](https://github.com/22091397095-AhmadBalyaDiwanullatifMIC22/Kelompok-3-MI2022C-VRS-Website/assets/114341153/04b3bf96-9ace-4369-acff-6dee0948d0f9)


2.4 Lingkungan Operasi 


BAB 3. KEBUTUHAN ANTARMUKA EKSTERNAL


3.1 User Interfaces


3.2 Hardware Interface


3.3 Software Interface 


3.4 Communication Interface


BAB 4. FUNCTIONAL REQUIREMENTS

Persyaratan fungsional adalah pernyataan tentang bagaimana suatu sistem harus berperilaku. Ini mendefinisikan apa yang harus dilakukan sistem untuk memenuhi kebutuhan atau harapan pengguna. Persyaratan fungsional dapat dianggap sebagai fitur yang dideteksi pengguna. berbeda dari persyaratan non-fungsional, yang menentukan bagaimana sistem harus bekerja secara internal (misalnya, kinerja, keamanan, dll).

   a. Flowchart website VRS

   ![alt text](https://github.com/22091397095-AhmadBalyaDiwanullatifMIC22/Kelompok-3-MI2022C-VRS-Website/blob/master/assets/gambar/FLOWCHARTVRS.png?raw=true)

   b. Use case website VRS
   
   ![alt text](https://github.com/22091397095-AhmadBalyaDiwanullatifMIC22/Kelompok-3-MI2022C-VRS-Website/blob/master/assets/gambar/USE%20CASE%20DIAGRAM%20VRS%20(2).png?raw=true)

BAB 5. NON FUNCTIONAL REQUIREMENTS
![image](https://github.com/22091397095-AhmadBalyaDiwanullatifMIC22/Kelompok-3-MI2022C-VRS-Website/assets/114341153/05917f93-a16f-49fb-a7e9-0114a3d89f3c)


BAB 6. PENJELASAN HTML CSS

      6.1 PENJELASAN HTML
      #Penjelasan index.html:
      1. <!DOCTYPE html>
         - Ini adalah deklarasi dokumen HTML versi 5.
      2. <html lang="en">
         - Tag pembuka untuk elemen HTML. `lang="en"` menandakan bahwa bahasa yang digunakan dalam halaman adalah bahasa Inggris.
      3. <head>
         - Bagian kepala dokumen yang mengandung informasi-informasi metadata, seperti karakter set, viewport, judul halaman, dan referensi ke file eksternal.
      4. <meta charset="UTF-8" />
         - Menentukan karakter set dokumen sebagai UTF-8 untuk mendukung karakter internasional.
      5. <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         - Mengatur tampilan viewport untuk perangkat seluler, memastikan lebar viewport mengikuti lebar perangkat dan memberikan faktor skala awal 1.
      6. <title>Web | Vehicle Rental Service</title>
         - Memberikan judul untuk halaman web yang akan ditampilkan di tab atau judul jendela.
      7. <link rel="stylesheet" href="./assets/CSS/index.css">
         - Mengaitkan file CSS eksternal (`index.css`) ke dalam halaman HTML.
      8. <header>
         - Menandai bagian header dari halaman web.
      9. <div class="main-header">
         - Membuat div untuk header utama.
      10. <div class="navbar-header">
          - Membuat div untuk bagian navbar dalam header.
      11. <div class="icon-header">
          - Membuat div untuk menyimpan ikon atau logo dalam header.
      12. <h2 class="logo-header">VRS</h2>
          - Menampilkan teks atau logo (dengan kelas CSS "logo-header") sebagai bagian dari header.
      13. <div class="menu-header">
          - Membuat div untuk menyimpan menu navigasi dalam header.
      14. <ul class="header-up">
          - Membuat daftar tak berurutan (unordered list) sebagai menu navigasi.
      15. <li><a href="TentangVRS.html">About Us</a></li>
          - Membuat item daftar yang berisi tautan menu ke halaman "TentangVRS.html".
      16. <li><a href="KontakVRS.html">Kontak</a></li>
          - Membuat item daftar yang berisi tautan menu ke halaman "KontakVRS.html".
      17. <li><a href="ProfileOwner.html">Owner</a></li>
          - Membuat item daftar yang berisi tautan menu ke halaman "ProfileOwner.html".
      18. <body>
          - Menandai bagian utama dari konten halaman.
      19. <div class="content">
          - Membuat div untuk konten utama.
      20. <h1>Vehicle Rental<br><span>Service</span></h1>
          - Menampilkan judul utama halaman dengan efek patah baris di antara kata-kata "Vehicle Rental" dan "Service". Menggunakan elemen `<span>` untuk memberikan gaya khusus pada kata "Service".
      21. <p class="par">Sewa dengan cara yang aman!<br>Gunakan website kami sekarang dan jelajahi pengalaman sewa yang terjamin keamanannya.<br>Kebutuhan Anda, prioritas kami!</p>
          - Menampilkan paragraf dengan beberapa baris yang memberikan deskripsi tentang layanan Vehicle Rental Service.
      22. <div class="form">
          - Membuat div untuk area formulir atau tombol.
      23. <h2>Account</h2>
          - Menampilkan subjudul "Account" di dalam div.
      24. <button class="btnn"><a href="login.html">Login </a></button>
          - Membuat tombol dengan tautan menuju halaman "login.html".
      25. <button class="btnn"><a href="Register.html">Register</a></button>
          - Membuat tombol dengan tautan menuju halaman "Register.html".
      26. </div>
          - Tag penutup untuk div dengan kelas "form".
      27. </div>
          - Tag penutup untuk div dengan kelas "content".
      28. <footer>
          - Menandai bagian footer dari halaman.
      29. <Button><a href="https://www.instagram.com/ahmdbalya13_/">Instagram</a></Button>
          - Menampilkan tombol dengan tautan menuju halaman Instagram.
      30. <Button><a href="https://www.facebook.com/ahmad.balya.diwanullatif/">Facebook</a></Button>
          - Menampilkan tombol dengan tautan menuju halaman Facebook.
         31. </html>
          - Tag penutup untuk elemen HTML.

      #Penjelasan KontakVRS.html:
      1. <!DOCTYPE html>
         - Ini adalah deklarasi dokumen HTML versi 5.
      2. <html lang="en">
         - Tag pembuka untuk elemen HTML. `lang="en"` menandakan bahwa bahasa yang digunakan dalam halaman adalah bahasa Inggris.
      3. <head>
         - Bagian kepala dokumen yang mengandung informasi-informasi metadata, seperti karakter set, viewport, judul halaman, dan referensi ke file eksternal.
      4. <meta charset="UTF-8" />
         - Menentukan karakter set dokumen sebagai UTF-8 untuk mendukung karakter internasional.
      5. <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         - Mengatur tampilan viewport untuk perangkat seluler, memastikan lebar viewport mengikuti lebar perangkat dan memberikan faktor skala awal 1.
      6. <title>Web | Vehicle Rental Service</title>
         - Memberikan judul untuk halaman web yang akan ditampilkan di tab atau judul jendela.
      7. <link rel="stylesheet" href= "./assets/CSS/StyleKontakVRS.css">'
         - Mengaitkan file CSS eksternal (`StyleKontakVRS.css`) ke dalam halaman HTML.
      8. <body>
         - Menandai bagian utama dari konten halaman.
      9. <div class="containerc">
         - Membuat div untuk kontainer utama.
      10. <div class="card-containerc">
          - Membuat div untuk kontainer kartu yang mengandung dua bagian, yaitu bagian kiri dan kanan.
      11. <div class="leftc">
          - Membuat div untuk bagian kiri dari kartu.
      12. <div class="left-containerc">
          - Membuat div untuk menyimpan elemen-elemen di dalam bagian kiri.
      13. <img src="./assets/gambar/VRS.jpg" style="width: 80%;">
          - Menampilkan gambar dengan path `"./assets/gambar/VRS.jpg"` dan lebar 80%.
      14. <h2>Vehicle Rental Service</h2>
          - Menampilkan judul "Vehicle Rental Service".
      15. <p>Hubungi kami via Whatsapp :<button class="whatsapp-button"><a href="https://api.whatsapp.com/send?phone=6281334712470" style="color: #d2662b;">081334712470</a></button></p>
          - Menampilkan paragraf dengan tombol Whatsapp untuk menghubungi nomor tertentu.
      16. <button class="back-button"><a href="../index.html" style="color: aliceblue;">Back</a></button>
          - Tombol "Back" dengan tautan menuju halaman utama.
      17. </div>
          - Tag penutup untuk div dengan kelas "left-containerc".
      18. </div>
          - Tag penutup untuk div dengan kelas "leftc".
      19. <div class="rightc">
          - Membuat div untuk bagian kanan dari kartu.
      20. <div class="right-containerc">
          - Membuat div untuk menyimpan elemen-elemen di dalam bagian kanan.
      21. <form action="">
          - Membuat formulir untuk pengguna mengisi data.
      22. <h2 class="lg-view">Hubungi Kami</h2>
          - Menampilkan judul "Hubungi Kami" dengan kelas "lg-view" (mungkin untuk tampilan layar lebar).
      23. <h2 class="sm-viewc">Hubungi Kami</h2>
          - Menampilkan judul "Hubungi Kami" dengan kelas "sm-viewc" (mungkin untuk tampilan layar kecil).
      24. <input type="text" placeholder="Nama">
          - Input teks untuk nama dengan placeholder "Nama".
      25. <input type="email" placeholder="Alamat Email">
          - Input teks untuk alamat email dengan placeholder "Alamat Email".
      26. <input type="text" placeholder="Perusahaan" autocomplete="off">
          - Input teks untuk nama perusahaan dengan placeholder "Perusahaan" dan `autocomplete` dinonaktifkan.
      27. <input type="phone" placeholder="Telepone" autocomplete="off">
          - Input teks untuk nomor telepon dengan placeholder "Telepone" dan `autocomplete` dinonaktifkan.
      28. <textarea rows="10" placeholder="Pesan"></textarea>
          - Textarea untuk memasukkan pesan dengan placeholder "Pesan" dan tinggi 10 baris.
      29. <button>Kirim</button>
          - Tombol untuk mengirim formulir.
      30. </form>
          - Tag penutup untuk elemen formulir.
      31. </div>
          - Tag penutup untuk div dengan kelas "right-containerc".
      32. </div>
          - Tag penutup untuk div dengan kelas "rightc".
      33. </div>
          - Tag penutup untuk div dengan kelas "card-containerc".
      34. </div>
          - Tag penutup untuk div dengan kelas "containerc".
      35. <footer>
          - Menandai bagian footer dari halaman.
      36. <Button><a href="https://www.instagram.com/ahmdbalya13_/">Instagram</a></Button>
          - Menampilkan tombol dengan tautan menuju halaman Instagram.
      37. <Button><a href="https://www.facebook.com/ahmad.balya.diwanullatif/">Facebook</a></Button>
          - Menampilkan tombol dengan tautan menuju halaman Facebook.
      38. </html>
          - Tag penutup untuk elemen HTML.

      #Penjelasan TentangVRS.html:
      1. <!DOCTYPE html>
         - Ini adalah deklarasi dokumen HTML versi 5.
      2. <html>
         - Tag pembuka untuk elemen HTML.
      3. <head>
         - Bagian kepala dokumen yang mengandung informasi-informasi metadata, seperti karakter set, viewport, judul halaman, dan referensi ke file eksternal.
      4. <meta charset="UTF-8">
         - Menentukan karakter set dokumen sebagai UTF-8 untuk mendukung karakter internasional.
      5. <meta name="viewport" content="width=device-width, initial-scale=1.0">
         - Mengatur tampilan viewport untuk perangkat seluler, memastikan lebar viewport mengikuti lebar perangkat dan memberikan faktor skala awal 1.
      6. <link rel="stylesheet" href="./assets/CSS/StyleTentangVRS.css">
         - Mengaitkan file CSS eksternal (`StyleTentangVRS.css`) ke dalam halaman HTML.
      7. <title>About Us</title>
         - Memberikan judul untuk halaman web yang akan ditampilkan di tab atau judul jendela.
      8. <body>
         - Menandai bagian utama dari konten halaman.
      9. <section class="about">
         - Membuat bagian (section) dengan kelas "about" yang berisi informasi tentang halaman.
      10. <h1>About Us</h1>
          - Menampilkan judul utama "About Us".
      11. <p style="font-weight: bold">Vehicle Rental Service</p>
          - Menampilkan paragraf dengan teks "Vehicle Rental Service" yang memiliki gaya teks tebal.
      12. <div class="about-info">
          - Membuat div untuk menyimpan informasi tentang halaman.
      13. <div class="about-img">
          - Membuat div untuk menyimpan gambar.
      14. <img src= "./assets/gambar/VRS.jpg" alt="VRS">
          - Menampilkan gambar dengan path `./assets/gambar/VRS.jpg` dan atribut `alt` untuk teks alternatif.
      15. <div>
          - Membuat div untuk menyimpan informasi lainnya.
      16. <p>Website ini dikembangkan untuk memperkenalkan lebih luas mengenai aplikasi Vehicle Rental Service yang memudahkan masyarakat dalam mencari tempat rental kendaraan dan menyewa kendaraan secara online...</p>
          - Menampilkan paragraf yang memberikan informasi tentang tujuan dan manfaat dari aplikasi Vehicle Rental Service.
      17. <button><a href="index.html">Back</a></button>
          - Membuat tombol dengan tautan menuju halaman utama ("index.html").
      18. </div>
          - Tag penutup untuk div yang menyimpan informasi.
      19. </div>
          - Tag penutup untuk div yang menyimpan gambar.
      20. </div>
          - Tag penutup untuk div yang menyimpan informasi tentang halaman.
      21. </section>
          - Tag penutup untuk bagian "about".
      22. <footer>
          - Menandai bagian footer dari halaman.
      23. <p>© 2023 VehicleRentalService. All Rights Reserved.</p>
          - Menampilkan paragraf dengan hak cipta dan tahun yang menunjukkan hak cipta dilindungi sampai tahun 2023.
      24. </footer>
          - Tag penutup untuk bagian footer.
      25. </body>
          - Tag penutup untuk elemen body.
      26. </html>
          - Tag penutup untuk elemen HTML.

            #penjelasan tentang login.html
      1. <!DOCTYPE html>
      -Ini adalah deklarasi tipe dokumen (Document Type Declaration) untuk menyatakan bahwa dokumen ini adalah dokumen HTML5.
      2. <html lang="en">: 
      - Tag pembuka untuk elemen HTML. lang="en" menunjukkan bahwa konten dalam dokumen ini menggunakan bahasa Inggris (English).<head>: 
      - Bagian ini berisi informasi-informasi meta dan tautan ke berkas eksternal seperti CSS atau JavaScript.
      3. <meta charset="UTF-8" />: 
      -Menginformasikan bahwa karakter encoding dokumen ini adalah UTF-8, yang mendukung berbagai karakter dari berbagai bahasa.
      4. <meta name="viewport" content="width=device-width, initial-scale=1.0" />: 
      -Pengaturan untuk responsifitas desain halaman web, memungkinkan tampilan yang baik pada perangkat dengan lebar layar yang berbeda.
      5. <link rel="stylesheet" href="./assets/CSS/index.css"> dan <link rel="stylesheet" href="./assets/CSS/login.css">: 
      -	Menghubungkan berkas CSS eksternal ke halaman HTML. CSS ini digunakan untuk mengatur tata letak dan gaya tampilan halaman web.
      6. <body> 
      -	Bagian ini berisi konten aktual dari halaman web.
      7. <div class="main-header">
      -	Sebuah div dengan kelas "main-header" yang mungkin digunakan untuk menampung header halaman web.
      8. <div class="navbar-header">
      -	Sebuah div dengan kelas "navbar-header" yang mungkin digunakan untuk menampung elemen-elemen header navigasi.
      9. <div class="icon-header"> 
      -	Sebuah div dengan kelas "icon-header" yang mungkin digunakan untuk menampilkan ikon atau logo.
      10. <h2 class="logo-header">VRS</h2>
      -	Sebuah elemen heading level 2 dengan kelas "logo-header" yang mungkin digunakan untuk menampilkan teks atau logo "VRS".
      11. <div class="menu-header"> 
      -	Sebuah div dengan kelas "menu-header" yang mungkin digunakan untuk menampilkan menu navigasi.
      12. <ul class="header-up">
      -	Sebuah daftar tak-terurut (unordered list) dengan kelas "header-up" yang mungkin berisi item-item menu navigasi.
      13. Setiap <li> (list item) mungkin berisi sebuah tautan <a> yang mengarah ke halaman-halaman terkait ("TentangVRS.html", "KontakVRS.html", "ProfileOwner.html").
      
      #penjelasan tentang ProfileOwner.html
      1. <h1>Owner Profile Cards</h1>
      -	Ini adalah elemen judul utama halaman, menunjukkan bahwa halaman ini akan menampilkan kartu profil pemilik bisnis.
      2.<div class="card-container">...</div> 
      -	Ini adalah wadah (container) untuk kartu-kartu profil pemilik bisnis. Kartu Profil Pemilik Bisnis: Setiap kartu memiliki gambar, nama pemilik bisnis, jabatan, universitas, dan tombol "Contact" yang              mengarah ke alamat email pemilik.
      3.<div class="text">...</div>
      -	Ini adalah wadah untuk informasi tambahan yang menjelaskan komitmen bisnis kepada pelanggan Pesan Informasi: Terdapat pesan yang menyatakan komitmen bisnis dalam memberikan layanan terbaik kepada                pelanggan. Juga terdapat ucapan terima kasih kepada pelanggan atas dukungan mereka.
      4.<button>...</button>
      -	ini adalah tombol yang mengandung tautan ("Back") yang mengarahkan pengguna kembali ke halaman utama (index.html) ketika tombol ini diklik.

      #penjelasan tentang register.html
      1. <!DOCTYPE html>
      -Ini adalah deklarasi tipe dokumen (Document Type Declaration) untuk menyatakan bahwa dokumen ini adalah dokumen HTML5.
      2. <html lang="en">: 
      - Tag pembuka untuk elemen HTML. lang="en" menunjukkan bahwa konten dalam dokumen ini menggunakan bahasa Inggris (English).<head>: 
      - Bagian ini berisi informasi-informasi meta dan tautan ke berkas eksternal seperti CSS atau JavaScript.
      3. <meta charset="UTF-8" />: 
      -Menginformasikan bahwa karakter encoding dokumen ini adalah UTF-8, yang mendukung berbagai karakter dari berbagai bahasa.
      4. <meta name="viewport" content="width=device-width, initial-scale=1.0" />: 
      -Pengaturan untuk responsifitas desain halaman web, memungkinkan tampilan yang baik pada perangkat dengan lebar layar yang berbeda.
      
      5. Kedua tag <link> ini menghubungkan halaman HTML ke dua file stylesheet eksternal (index.css dan register.css) 
      6. <div class="main-header">
      -	 Ini adalah sebuah div yang mencakup elemen-elemen yang membentuk header halaman Anda.
      7. <div class="navbar-header">
      -	Ini adalah div yang mendefinisikan bagian header dengan logo dan menu navigasi.
      8. <div class="icon-header">
      -	Ini adalah div yang menampung logo situs web, yang dalam hal ini adalah teks "VRS".
      9. <h2 class="logo-header">VRS</h2>
      -	Ini adalah elemen teks dengan kelas logo-header, yang mendefinisikan logo situs web.
      10. <div class="menu-header">
      -	Ini adalah div yang berisi menu navigasi situs web.
      11. <ul class="header-up">
      -	Ini adalah daftar tak berurutan (unordered list) dengan kelas header-up.
      
      12. <li><a href="TentangVRS.html">About Us</a></li>
      -	Ini adalah item daftar yang merupakan tautan ke halaman "Tentang Kami".
      13. <li><a href="KontakVRS.html">Kontak</a></li>
      -	Ini adalah item daftar yang merupakan tautan ke halaman "Kontak".
      14. <li><a href="ProfileOwner.html">Owner</a></li>
      -	Ini adalah item daftar yang merupakan tautan ke halaman "Profil Pemilik".
      15. <body>
      16. <div class="body-register">
      -	Ini adalah div yang mengelilingi seluruh konten halaman registrasi. Digunakan untuk memberikan gaya dan memformat area konten registrasi.
      17. <div class="container-register"> 
      -	Ini adalah div yang berisi semua elemen formulir registrasi pengguna.
      18. <h2>Formulir Registrasi Pengguna</h2>
      -	Ini adalah judul formulir yang memberi tahu pengguna bahwa ini adalah formulir registrasi pengguna.
      19. <form action="/submit_registration" method="post">: 
      -	Ini adalah tag <form> yang mendefinisikan awal formulir. Atribut action menentukan URL ke mana data formulir akan dikirim ketika formulir disubmit. Atribut method menentukan metode HTTP yang akan                digunakan untuk mengirimkan data formulir, dalam hal ini, metode POST digunakan.
      20. <div class="form-groupregister">
      -	Ini adalah div yang mengelilingi setiap elemen formulir (label dan input) untuk memberikan gaya dan tata letak.
      21. <label for="username">Nama 
      -	</label>: Ini adalah label untuk kolom input nama.
      22. <input type="text" id="username" name="username" required>
      -	Ini adalah input teks di mana pengguna dapat memasukkan nama. Atribut id digunakan untuk menghubungkan label dengan input, dan atribut name memberikan nama bidang yang akan dikirimkan saat formulir               disubmit. Atribut required menandakan bahwa input ini harus diisi sebelum formulir dapat disubmit.
      23. Elemen-elemen yang serupa ada untuk alamat email, password, dan konfirmasi password.
      24. <div class="form-group-register">
      -	Ini adalah div yang mengelilingi tombol "Register" dan tautan "Back".
      25. <button type="submit">Register</button> 
      -	Ini adalah tombol yang, ketika ditekan, akan mengirimkan formulir ke URL yang ditentukan dalam atribut action.
      26. <button><a href="../index.html"> Back </a></button>
      -	Ini adalah tombol tautan yang mengarahkan pengguna kembali ke halaman utama (index.html) ketika ditekan.

      6.2 PENJELASAN CSS
      #Penjelasan index.css:
      1. * { margin: 0; padding: 0; }
         - Selector universal untuk menghilangkan margin dan padding secara default pada semua elemen.
      2. body { ... }
         - Pengaturan untuk elemen `body`:
           - `display: flex;`: Menggunakan model tata letak flex.
           - `min-height: 100vh;`: Menetapkan tinggi minimum 100% dari tinggi viewport.
           - `background-image: url(/assets/gambar/mobilhd.png);`: Menetapkan gambar latar belakang.
           - `background-size: cover;`: Mengatur ukuran gambar latar belakang agar mencakup seluruh area.
           - `background-position: center;`: Menetapkan posisi gambar latar belakang di tengah.
           - `background-repeat: no-repeat;`: Menetapkan agar gambar latar belakang tidak diulang.
      3. .background { ... }
         - Pengaturan untuk elemen dengan kelas "background":
           - `display: none;`: Elemen ini awalnya disembunyikan.
      4. .main-header { ... }
         - Pengaturan untuk elemen dengan kelas "main-header":
           - `background-color: rgba(5, 5, 5, 0.49);`: Warna latar belakang dengan opacity.
           - `height: 10vh;`: Tinggi elemen 10% dari tinggi viewport.
           - `width: relative;`: Kesalahan penulisan, seharusnya `width: auto;` atau dihapus.
           - `background-repeat: no-repeat;`: Menetapkan agar gambar latar belakang tidak diulang.
      5. .navbar-header { ... }
         - Pengaturan untuk elemen dengan kelas "navbar-header":
           - `width: 1200px;`: Lebar elemen 1200 piksel.
           - `height: 75px;`: Tinggi elemen 75 piksel.
           - `margin: auto;`: Elemen ini ditengahkan secara horizontal.
      6. .icon-header { ... }
         - Pengaturan untuk elemen dengan kelas "icon-header":
           - `width: 200px;`: Lebar elemen 200 piksel.
           - `float: left;`: Membuat elemen melayang di sebelah kiri.
      7. .logo-header { ... }
         - Pengaturan untuk elemen dengan kelas "logo-header":
           - `color: #ff7200;`: Warna teks.
           - `font-size: 35px;`: Ukuran teks.
           - `font-family: Arial;`: Jenis huruf.
           - `padding-left: 20px;`: Padding pada sisi kiri.
           - `float: left;`: Membuat elemen melayang di sebelah kiri.
           - `padding-top: 10px;`: Padding di bagian atas.
           - `margin-top: 5px;`: Margin di bagian atas.
      8. .menu-header { ... }
         - Pengaturan untuk elemen dengan kelas "menu-header":
           - `width: 400px;`: Lebar elemen 400 piksel.
           - `float: left;`: Membuat elemen melayang di sebelah kiri.
           - `height: 70px;`: Tinggi elemen 70 piksel.
      9. ul { ... }
         - Pengaturan untuk elemen `ul` (daftar tak berurutan):
           - `float: left;`: Membuat elemen melayang di sebelah kiri.
           - `display: flex;`: Menggunakan model tata letak flex.
           - `justify-content: center;`: Mengatur penataan ke tengah secara horizontal.
           - `align-items: center;`: Mengatur penataan ke tengah secara vertikal.
           - `text-decoration: underline;`: Garis bawah pada tautan.
      10. ul li { ... }
          - Pengaturan untuk elemen `li` di dalam elemen `ul`:
            - `list-style: none;`: Menghilangkan gaya daftar.
            - `margin-left: 62px;`: Margin di sisi kiri.
            - `margin-top: 27px;`: Margin di bagian atas.
            - `font-size: 14px;`: Ukuran teks.
      11. ul li a { ... }
          - Pengaturan untuk tautan di dalam elemen `li`:
            - `text-decoration: none;`: Menghilangkan dekorasi tautan.
            - `color: #fff;`: Warna teks.
            - `font-family: Arial;`: Jenis huruf.
            - `font-weight: bold;`: Ketebalan teks.
            - `transition: 0.4s ease-in-out;`: Efek transisi.
      12. ul li a:hover { ... }
          - Pengaturan saat tautan di-hover:
            - `color: #ff7200;`: Warna teks berubah saat di-hover.

      #Penjelasan StyleKontakVRS.css:
      1. body { ... }
         - Pengaturan untuk elemen `body`:
           - `display: flex;`: Menggunakan model tata letak flex.
           - `justify-content: center;`: Menyusun elemen secara horizontal di tengah.
           - `align-items: center;`: Menyusun elemen secara vertikal di tengah.
           - `flex-direction: column;`: Menyusun elemen secara vertikal.
           - `font-family: "Montserrat", sans-serif;`: Jenis huruf yang akan digunakan.
           - `font-size: 10px;`: Ukuran teks.
           - `height: 100vh;`: Tinggi elemen 100% dari tinggi viewport.
           - `margin: -20px 0 50px;`: Margin pada sisi atas, sisi bawah, dan sisi kanan.
           - `padding: 10px;`: Padding pada sisi dalam elemen.
           - `background-image: url('/assets/gambar/mobilhd.png');`: Menetapkan gambar latar belakang.
      2. .containerc { ... }
         - Pengaturan untuk elemen dengan kelas "containerc":
           - `background-color: #000000;`: Warna latar belakang elemen.
           - `border-radius: 5px;`: Radius sudut elemen.
           - `box-shadow: ...;`: Bayangan elemen.
           - `position: relative;`: Menetapkan posisi elemen.
           - `overflow: visible;`: Mengatur overflow ke visible.
           - `width: 769px;`: Lebar elemen 769 piksel.
           - `max-width: 100%;`: Lebar elemen maksimum 100% dari parent.
           - `min-height: 522px;`: Tinggi elemen minimum 522 piksel.
           - `min-width: 370px;`: Lebar elemen minimum 370 piksel.
      
      3. .card-containerc { ... }
         - Pengaturan untuk elemen dengan kelas "card-containerc":
           - `display: flex;`: Menggunakan model tata letak flex.
           - `position: relative;`: Menetapkan posisi elemen.
      4. .leftc { ... }
         - Pengaturan untuk elemen dengan kelas "leftc":
           - `flex: 1;`: Membagi ruang seimbang untuk elemen di dalam flex container.
           - `height: 480px;`: Tinggi elemen 480 piksel.
           - `background-color: #bcbbb1;`: Warna latar belakang elemen.
           - **Catatan:** Terdapat duplikasi definisi `.leftc` di bagian bawah, mungkin ada kesalahan penulisan.
      5. .rightc { ... }
         - Pengaturan untuk elemen dengan kelas "rightc":
           - `display: flex;`: Menggunakan model tata letak flex.
           - `flex: 1;`: Membagi ruang seimbang untuk elemen di dalam flex container.
           - `height: 570px;`: Tinggi elemen 570 piksel.
           - `background-color: #bcbbb1;`: Warna latar belakang elemen.
           - `justify-content: center;`: Menyusun elemen secara horizontal di tengah.
      6. .left-containerc { ... }
         - Pengaturan untuk elemen dengan kelas "left-containerc":
           - `height: 70%;`: Tinggi elemen 70% dari parent.
           - `width: 80%;`: Lebar elemen 80% dari parent.
           - `text-align: center;`: Penataan teks ke tengah.
           - `line-height: 21px;`: Ketinggian baris elemen.
      7. .leftc p { ... }
         - Pengaturan untuk elemen `p` di dalam elemen dengan kelas "leftc":
           - `font-size: 12px;`: Ukuran teks.
      8. h2 { ... }
         - Pengaturan untuk elemen `h2`:
           - `font-size: 28px;`: Ukuran teks.
           - `margin-bottom: 12px;`: Margin pada sisi bawah.
      9. .right-containerc { ... }
         - Pengaturan untuk elemen dengan kelas "right-containerc":
           - `width: 90%;`: Lebar elemen 90% dari parent.
           - `height: 80%;`: Tinggi elemen 80% dari parent.
           - `padding-right: 20px;`: Padding pada sisi kanan.
           - `text-align: center;`: Penataan teks ke tengah.
      10. input, textarea { ... }
          - Pengaturan untuk elemen `input` dan `textarea`:
            - `background-color: #d3646449;`: Warna latar belakang elemen.
            - `border: 1px solid;`: Garis elemen.
            - `padding: 12px 2px;`: Padding pada sisi dalam elemen.
            - `margin: 8px 0;`: Margin pada sisi atas dan bawah.
            - `width: 100%;`: Lebar elemen 100% dari parent.
            - `font-size: 13px;`: Ukuran teks.
            - `border-radius: 10px;`: Radius sudut elemen.
      11. button { ... }
          - Pengaturan untuk elemen `button`:
            - `border-radius: 20px;`: Radius sudut elemen.
            - `border: 1px solid #00000000;`: Garis elemen.
            - `background-color: #332020c3;`: Warna latar belakang elemen.
            - `color: #ffffff;`: Warna teks.
            - `font-size: 12px;`: Ukuran teks.
            - `font-weight: bold;`: Ketebalan teks.
            - `padding: 12px 45px;`: Padding pada sisi dalam elemen.
            - `letter-spacing: 1px;`: Jarak antar huruf.
            - `text-transform: uppercase;`: Mengonversi teks menjadi huruf besar.
            - `transition: transform 80ms ease-out;`: Efek transisi.
            - `cursor: pointer;`: Mengubah kursor saat diarahkan.
      12. button:hover { ... }
          - Pengaturan saat tombol di-hover:
            - `opacity: 0.7;`: Tingkat kejelasan elemen.
      13. textarea { ... }
          - Pengaturan tambahan untuk elemen `textarea`:
            - `height: 90px;`: Tinggi elemen 90 piksel.
      14. @media only screen and (max-width: 600px) { ... }
          - Pengaturan responsif untuk lebar layar maksimum 600 piksel:
            - `.leftc { display: none; }`: Menyembunyikan elemen dengan kelas "leftc".
            - `.lg-viewc { display: none; }`: Menyembunyikan elemen dengan kelas "lg-viewc".
      15. @media only screen and (min-width: 600px) { ... }
          - Pengaturan responsif untuk lebar layar minimum 600 piksel:
            - `.sm-viewc { display: none; }`: Menyembunyikan elemen dengan kelas "sm-viewc".

      #Penjelasan StyleTentangVRS.css:
      1. * { ... }
         - Selector universal yang berlaku untuk semua elemen.
         - `margin: 0;`: Menghilangkan margin default.
         - `padding: 0;`: Menghilangkan padding default.
         - `box-sizing: border-box;`: Menetapkan model kotak dengan padding dan border yang terhitung dalam total lebar dan tinggi elemen.
      2. body { ... }
         - Pengaturan untuk elemen `body`:
           - `font-family: Georgia, 'Times New Roman', Times, serif;`: Jenis huruf yang akan digunakan.
      3. .about { ... }
         - Pengaturan untuk elemen dengan kelas "about" (seksi tentang):
           - `background: #000000;`: Warna latar belakang.
           - `background-image: url(../gambar/mobilhd.png);`: Gambar latar belakang.
           - `padding: 100px 0 20px 0;`: Padding pada sisi dalam elemen.
           - `text-align: center;`: Penataan teks ke tengah.
           - `margin-bottom: 100px;`: Margin pada sisi bawah.
           - `height: 100vh;`: Tinggi elemen setara dengan tinggi viewport.
      4. .about h1 { ... }
         - Pengaturan untuk elemen `h1` di dalam elemen dengan kelas "about":
           - `font-size: 42px;`: Ukuran teks.
           - `margin-bottom: 50px;`: Margin pada sisi bawah.
           - `color: #ffffff;`: Warna teks.
           - `margin-top: auto;`: Margin pada sisi atas.
      5. .about p { ... }
         - Pengaturan untuk elemen `p` di dalam elemen dengan kelas "about":
           - `font-size: 30px;`: Ukuran teks.
           - `color: #ffffff;`: Warna teks.
           - `max-width: 800px;`: Lebar maksimum elemen.
           - `margin: 0 auto;`: Margin otomatis pada sisi kiri dan kanan.
      6. .about-info { ... }
         - Pengaturan untuk elemen dengan kelas "about-info":
           - `margin: 20px;`: Margin pada sisi luar elemen.
           - `display: flex;`: Menggunakan model tata letak flex.
           - `align-items: center;`: Menyusun elemen secara vertikal di tengah.
           - `justify-content: center;`: Menyusun elemen secara horizontal di tengah.
           - `text-align: left;`: Penataan teks ke kiri.
      7. .about-img { ... }
         - Pengaturan untuk elemen dengan kelas "about-img":
           - `width: 450px;`: Lebar elemen 450 piksel.
           - `height: auto;`: Tinggi elemen menyesuaikan proporsi aslinya.
      8. .about-img img { ... }
         - Pengaturan untuk elemen `img` di dalam elemen dengan kelas "about-img":
           - `width: 100%;`: Lebar gambar 100% dari elemen parent.
           - `height: 100%;`: Tinggi gambar 100% dari elemen parent.
           - `border-radius: 5px;`: Radius sudut elemen.
           - `object-fit: contain;`: Memastikan gambar sesuai dengan elemen tanpa merubah rasio aspek.
      9. .about-info p { ... }
         - Pengaturan untuk elemen `p` di dalam elemen dengan kelas "about-info":
           - `font-size: 18px;`: Ukuran teks.
           - `margin: 0 32px;`: Margin pada sisi kiri dan kanan.
           - `text-align: justify;`: Penataan teks rata kiri.
      10. button { ... }
          - Pengaturan untuk elemen `button`:
            - `border: none;`: Menghilangkan batas elemen.
            - `outline: 0;`: Menghilangkan outline (garis tepi) pada fokus.
            - `padding: 10px;`: Padding pada sisi dalam elemen.
            - `margin: 32px;`: Margin pada sisi luar elemen.
            - `font-size: 14px;`: Ukuran teks.
            - `color: white;`: Warna teks.
            - `background-color: #ff7200;`: Warna latar belakang.
            - `text-align: center;`: Penataan teks ke tengah.
            - `cursor: pointer;`: Mengubah kursor saat diarahkan.
