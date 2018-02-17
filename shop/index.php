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
                <a class="header-cart-link" href="keranjang.php">My Keranjang</a>
            </div>
        </div>
    </div>

    <div class="row section">
        <!-- keunggulan -->
        <div class="row col l12 keunggulan">
            <div class="col l4 text-center">
                <i class="material-icons keunggulan-icon">verified_user</i>
                <p><b>Belanja Aman</b></p>
            </div>
            <div class="col l4 text-center">
                <i class="material-icons keunggulan-icon">add_shopping_cart</i>
                <p><b>Metode Pembayaran</b></p>
            </div>
            <div class="col l4 text-center">
                <i class="material-icons keunggulan-icon">directions_run</i>
                <p><b>Pengiriman Cepat</b></p>
            </div>
        </div>

        <!-- promo -->
        <div class="row col l2 promo">
            <p class="promo-title">Diskon</p>
            <div class="col l12 text-center">
                <img src="../img/3.png" class="promo-product-photo">
                <p class="promo-product-title"><b>Baju Mage Kekinian</b></p>
            </div>
        </div>

        <!-- diskon -->
        <div class="row col l9 diskon">
            <p class="diskon-title">Promo</p>
            <div class="col l4 text-center">
                <img src="../img/2.png" class="diskon-product-photo">
                <p class="diskon-product-title"><b>Jam tangan</b></p>
            </div>
            <div class="col l4" style="text-align: center;">
                <img src="../img/2.png" class="diskon-product-photo">
                <p class="diskon-product-title"><b>Jam tangan</b></p>
            </div>
            <div class="col l4" style="text-align: center;">
                <img src="../img/2.png" class="diskon-product-photo">
                <p class="diskon-product-title"><b>Jam tangan</b></p>
            </div>
        </div>

        <!-- all produk -->
        <div class="row col l12 allproduk">
            <p class="allproduk-title">All Produk</p>

            <?php
            include "koneksi.php";

            $sql = "SELECT id, nama, harga FROM barang WHERE jumlahbarang > 0";
            $query = mysqli_query($koneksi, $sql);
            while($get_row = mysqli_fetch_assoc($query)) {
                ?>
                <div class="col l3 allproduk-item">
                    <img src="../img/<?php echo $get_row['id']; ?>" class="allproduk-item-photo">
                    <p class="allproduk-item-title"><b><?php echo $get_row['nama']; ?></b></p>
                    <p class="allproduk-item-price"><b>Harga : Rp <?php echo $get_row['harga']; ?></b></p>
                    <a class="btn allproduk-item-btn" href="detail.php?id=<?php echo $get_row['id']; ?>">Lihat Detail</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
