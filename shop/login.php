<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

$nm_login = $_POST['nm_login'];
$pass_login = $_POST['pass_login'];

$sql = "SELECT * FROM user WHERE username='".$nm_login."' AND password='".$pass_login."'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query) > 0) {
    header("location:index.php");
}else {
    ?>
    <script type="text/javascript">
        alert("Kombinasi Nama Pengguna dan Sandi Tidak Cocok !");
        window.location = "../login.html";
    </script>
    <?php
}
?>
