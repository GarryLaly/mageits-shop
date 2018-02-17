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
        <div class="row col l12 produk-detail">
            <div class="col l4 produk-detail-content">
                <img src="../img/1.png">
                <p><b>Laptop</b></p>
                <p class="text-left"><b>Deskripsi:</b></p>
                <p class="text-left">Laptop terbaru Murah Meriah</p>
            </div>
            <div class="col l8 produk-detail-paragraph">
                <p><b>Stok barang : 20 pcs</b></p>
                <p><b>Harga : Rp 5000000</b></p>
                <p><a href="#" class="btn">Tambah ke keranjang</a></p>
                <a href="index.php" class="btn">Belanja lagi</a>
            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
