<?php 
session_start();

// membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","dbpweb");
// $mysqli = new mysqli("localhost","root","","dbpweb");


if (isset($_POST['submitedit'])) {
  $jnav   = $_POST['jnav'];
  $a      = $_POST['a'];
  $b      = $_POST['b'];
  $c      = $_POST['c'];
  $jhead  = $_POST['jhead'];
  $dhead  = $_POST['dhead'];
  $thead  = $_POST['thead'];
    
   $update = mysqli_query($conn,"UPDATE `index` SET `jnav`='$jnav',`a`='$a',`b`='$b',`c`='$c',`jhead`='$jhead',`dhead`='$dhead',`thead`='$thead' WHERE 1");
   if ($update) {
    header('location:index.php');
    }
}



// Tanggal
    function tanggal_indo($tanggal, $cetak_hari = false){
        $hari = array ( 1 =>    'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');     
        $bulan = array (1 =>   'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        $jam= ' ' . date("H:i") . ' WIB';
        $split    = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        
        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo . $jam;
        }
        return $tgl_indo;
    }


 ?>