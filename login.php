<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Web | Vehicle Rental Service</title> 
      <link rel="stylesheet" href="./assets/CSS/index.css">
      <link rel="stylesheet" href="./assets/CSS/login.css">
      <div class="main-header">
          <div class="navbar-header">
              <div class="icon-header">
                  <h2 class="logo-header">VRS</h2>
              </div>
              <div class="menu-header">
                  <ul class="header-up">
                      <li><a href="TentangVRS.html">About Us</a></li> 
                      <li><a href="KontakVRS.html">Kontak</a></li>
                      <li><a href="ProfileOwner.html">Owner</a></li>
                  </ul>
              </div>
          </div> 
    </head>
   

<body>
  <div class="body-login">
    <div class="container-login">
        <h2>Login User</h2>
        <form action="process_login.php" method="post" class="login100-form validate-form p-b-33 p-t-5" autocomplete="off">

            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                <input class="input100" id="username" type="text" name="username" placeholder="User name" >
                <span class="focus-input100" data-placeholder="&#xe82a;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" id="password" type="password" name="password" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xe80f;"></span>
            </div>

            <select class="form-select" aria-label="Default select example" name="level">
                <option selected>Pilih Level</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <div class="container-login100-form-btn m-t-32">
                <button type="submit" class="login100-form-btn">
                    Login
                </button>
            </div>
<br>
            <div class="ca">
                <a style="color:blue;" href="../Registrasi/index.php">create account</a>
            </div>

        </form>
    </div>
    </div>
</body>