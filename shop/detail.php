<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>
</head>
<body>
    <div class="row header">
        <div class="col l2 header-title">
            Mage Shop
        </div>
        <div class="col l8">
            <form class="row col l12">
                <div class="col l10 header-search">
                    <input type="text" name="" value="">
                </div>
                <div class="col l2 header-button">
                    <input type="submit" class="btn" value="Cari">
                </div>
            </form>
        </div>
        <div class="col l2 header-cart">
            <i class="material-icons header-cart-icon">local_mall</i>
            <div class="col l12">
                <a class="header-cart-link" href="cart.php">My Keranjang</a>
            </div>
        </div>
    </div>

    <div class="row section">
        <div class="row col l12 produk-detail">
            <?php
            include "koneksi.php";
            $productID = $_GET['id'];

            if (isset($productID)) {
                $sql = "SELECT id, nama, harga, deskripsi, jumlahbarang FROM barang WHERE jumlahbarang > 0 AND id='".$productID."'";
                $query = mysqli_query($koneksi, $sql);
                while($get_row = mysqli_fetch_assoc($query)) {
                    ?>
                    <div class="col l4 produk-detail-content">
                        <img src="../img/<?php echo $get_row['id']; ?>.png">
                        <p><b><?php echo $get_row['nama']; ?></b></p>
                        <p class="text-left"><b>Deskripsi:</b></p>
                        <p class="text-left"><?php echo $get_row['deskripsi']; ?></p>
                    </div>
                    <div class="col l8 produk-detail-paragraph">
                        <p><b>Stok barang : <?php echo $get_row['jumlahbarang']; ?> pcs</b></p>
                        <p><b>Harga : Rp <?php echo $get_row['harga']; ?></b></p>
                        <p><b>Pembelian</b></p>
                        <p><a href="cart.php?add=<?php echo $get_row['id']; ?>" class="btn">Tambah ke cart</a></p>
                        <a href="index.php" class="btn">Belanja lagi</a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
