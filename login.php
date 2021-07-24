<?php 
require 'fungsi.php'; 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekdb = mysqli_query($conn, "SELECT * FROM login where username='$username' and password='$password'");

    $hitung = mysqli_num_rows($cekdb);

    if ($hitung>0) {
        $_SESSION['log']='True';
        header('location:index.php');
    }else{
        echo "password/username salah";
        header('location:login.php');
    };
};
if (!isset($_SESSION['log'])) {

}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LOGIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
:root{
  --main-bg: rgb(41,128,185) linear-gradient(86deg, rgba(41,128,185,1) 0%, rgba(109,213,250,1) 50%, rgba(255,255,255,1) 100%);
  --sec-bg: #6DD5FA;
}
.main-bg {
  background: var(--main-bg) !important;
}
.sec-bg{
  background: var(--sec-bg) !important;	
}
input:focus, button:focus {
  border: 1px solid  !important;
  border-color: skyblue !important;
  box-shadow: none !important;
}
.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}
.card, .btn, input{
  border-radius:10px !important;
}

</style>

<body class="main-bg">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom ">
            <h2 class="p-3">LOGIN</h2>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="mb-4">
                <label for="username" class="form-label"> USERNAME</label>
                <input type="text" class="form-control" id="username" name="username" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label"> PASSWORD</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
              <div class="d-grid gap-2 col-6 mx-auto ">
                <button type="submit" name="login" class="btn text-white sec-bg shadow-sm">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>