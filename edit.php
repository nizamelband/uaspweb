<?php 
require 'fungsi.php'; 
require 'cek.php';
?>
<?php 
 
  $ambilindex = mysqli_query($conn,"SELECT * FROM `index` WHERE 1");
  $data=mysqli_fetch_array($ambilindex);
  $jnav = $data['jnav'];
  $a    = $data['a'];
  $b    = $data['b'];
  $c     = $data['c'];
  $jhead = $data['jhead'];
  $dhead = $data['dhead'];
  $thead = $data['thead'];
  
  ?>
<!DOC

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset/style.css">
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

<body class="main-bg ">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow mb-5">
          <div class="card-title text-center border-bottom ">
            <h2 class="p-3">Edit Index</h2>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="mb-4">
                <label  class="form-label"> JUDUL</label>
                <input type="text" class="form-control" name="jnav" value="<?=$jnav;?>" />
              </div>
              <div class="mb-4">
                <label  class="form-label"> A</label>
                <input type="text" class="form-control" name="a" value="<?=$a;?>"/>
              </div>
              <div class="mb-4">
                <label  class="form-label"> B</label>
                <input type="text" class="form-control" name="b" value="<?=$b;?>"/>
              </div>
              <div class="mb-4">
                <label  class="form-label"> C</label>
                <input type="text" class="form-control" name="c" value="<?=$c;?>" />
              </div>
              <div class="mb-4">
                <label  class="form-label"> Judul Header</label>
                <input type="text" class="form-control" name="jhead" value="<?=$jhead;?>"/>
              </div>
              <div class="mb-4">
                <label  class="form-label"> Deskripsi Header</label>
                <textarea type="text" rows="3" class="form-control "  name="dhead" value=""/><?=$dhead;?>
                </textarea>
              </div>
              <div class="mb-4">
                <label  class="form-label"> Tombol Header</label>
                <input type="text" class="form-control" name="thead" value="<?=$thead;?>" />
              </div>

              <div class="d-grid gap-2 col-6 mx-auto ">
                <button type="submit" name="submitedit" class="btn text-white sec-bg shadow-sm">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>