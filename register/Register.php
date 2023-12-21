<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));


    // Set the default level to 'user'
    $default_level = 'user';

    // Insert the new user into the database
    $insert_user = mysqli_query($conn, "INSERT INTO admin (username, password, level) VALUES ('$username', '$password', '$default_level')");

    if ($insert_user) {
        echo "<script>alert('Registration successful. You can now login.');
        document.location='../login/login.html';
        </script>";
    } else {
        echo "<script>alert('Registration failed. Please try again later.');
        document.location='register.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web | Vehicle Rental Service</title> 
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
  </head>
   
  
<body>
  <div class="body-register">
    <div class="container-register">
        <h2>Formulir Registrasi Pengguna</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-groupregister">
                <label for="username">username :</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-groupregister">
                <label for="email">password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group-register">
                <button type="submit">Register</button>
                <button><a href="../index.html"> Back </a></button>
            </div>
        </form>
    </div>
    </div>
</body>

</html>
