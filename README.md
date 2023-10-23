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


BAB 6. PENJELASAN HTML CSS

   
