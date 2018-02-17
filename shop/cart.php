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
        <?php
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        include "koneksi.php";

        if (isset($_GET['add'])) {
            $_SESSION['cart_'.(int)$_GET['add']]++;
            header('location:cart.php');
        }

        if (isset($_GET['kurangi'])) {
            $_SESSION['cart_'.(int)$_GET['kurangi']]--;
            header('location:cart.php');
        }

        if (isset($_GET['delete'])) {
            $_SESSION['cart_'.(int)$_GET['delete']] = 0;
            header('location:cart.php');
        }

        foreach($_SESSION as $name => $value) {
            if ($value > 0) {
                if (substr($name, 0, 5) == "cart_") {
                    $id = substr($name, 5, (strlen($name)-5));

                    $sql = "SELECT id, nama, harga FROM barang WHERE id='".mysqli_real_escape_string($koneksi, (int)$id)."'";
                    $query = mysqli_query($koneksi, $sql);
                    while($get_row = mysqli_fetch_assoc($query)) {
                        $sub = $get_row['harga'] * $value;
                        ?>
                        <div class="col l8 cart-item">
                            <div class="cart-item-content">
                                <h5><?php echo $get_row['nama']; ?></h5><br> Jumlah : <?php echo $value; ?><br> Harga : Rp <?php echo $get_row['harga']; ?><br> = Rp <?php echo $sub; ?><br>
                                <a class="btn" href="cart.php?kurangi=<?php echo $id; ?>"> - </a>
                                <a class="btn" href="cart.php?add=<?php echo $id; ?>"> + </a>
                                <a class="btn" href="cart.php?delete=<?php echo $id; ?>"> Hapus </a>
                            </div>
                        </div>
                        <?php

                        $total += $sub;
                    }
                }
            }
        }
        ?>
    </div>
    <?php
    if ($total == 0) {
        ?>
        <h5 style="margin-left: 420px;">Keranjang Kosong</h5>
        <?php
    }else {
        ?>
        <h5 style="margin-left: 350px;">Total Belanja = <?php echo $total; ?></h5>
        <?php
    }
    ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
