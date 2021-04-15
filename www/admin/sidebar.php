<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        Hoşgeldin <?php  echo ucwords($_SESSION['admin_kadi']); ?>
                        <br>

                        <small> </small>
                    </div>
                </div>

            </li>


            <li>
                <a class="menu" href="index.php"><i class="fa fa-dashboard "></i>Ana Sayfa</a>
            </li>
            <li>
                <a href="anayemek.php"><i class="fa fa-flash "></i>Ana Yemek</a>
            </li>
            <li>
                <a href="icecek.php"><i class="fa fa-flash "></i>İçecek</a>
            </li>
            <li>
                <a href="tatli.php"><i class="fa fa-flash "></i>Tatlı</a>
            </li>
            <li>
                <a href="kahvalti.php"><i class="fa fa-flash "></i>Kahvaltılar</a>
            </li>

            <li>
                <a href="icecekler.php"><i class="fa fa-flash "></i>İçecekler</a>
            </li>
            <li>
                <a href="tatlilar.php"><i class="fa fa-flash "></i>Tatlılar</a>
            </li>
            <li>
                <a href="rezervasyon.php"><i class="fa fa-flash "></i>Rezervasyonlar</a>
            </li>
        </ul>

    </div>

</nav>