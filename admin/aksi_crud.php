<?php
// panggil koneksi database
include '../koneksi.php';

// uji jika tombol simpan di klik
if (isset($_POST['bsimpan'])) {
    // persiapan simpan data baru
    $encryptedPassword = md5($_POST['password']); // Encrypt the password using MD5

    $simpan = mysqli_query($conn, "INSERT INTO admin (username, password, level)
                                    VALUES ('$_POST[username]',
                                            '$encryptedPassword',  -- Use the encrypted password
                                            '$_POST[level]'
                                    )");
    // jika simpan sukses
    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='hal_admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='index.php';
              </script>";
    }
}


// uji jika tombol ubah di klik
if (isset($_POST['bubah'])) {

    // persiapan ubah data
    $ubah = mysqli_query($conn, "UPDATE admin SET
                                    username = '$_POST[username]',
                                    level = '$_POST[level]'
                                    WHERE login_id = '$_POST[login_id]'
                                    ");
    // jika ubah sukses
    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='hal_admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='index.php';
              </script>";
    }
}

// uji jika tombol hapus di klik
if (isset($_POST['bhapus'])) {

    // persiapan hapus data
    $hapus = mysqli_query($conn, "DELETE FROM admin WHERE login_id = '$_POST[login_id]'");
    
    // jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='hal_admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='index.php';
              </script>";
    }
}
?>
