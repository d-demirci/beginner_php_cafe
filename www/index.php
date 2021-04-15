<?php include 'header.php';?>

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
            style="background-image: url(images/dasfdgxhcjvkbç.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        

<div id="fh5co-reservation-form" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 fh5co-heading animate-box">
                <h2>Günün Menüsü</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Restoran bölümümüzde hergün siz değerli misafirlerimiz için özel menüler hazırlanmaktadır
                            günün menüsünü seçen misafirlerimiz menüden %30 indirimli faydalanacaktır.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-featured-menu" class="fh5co-section">
    <div class="container">
        <div class="row">

            <?php

$menusorgu = $db->prepare("select * from anayemek");
$menusorgu->execute();

while ($menucek = $menusorgu->fetch(PDO::FETCH_ASSOC)) {?>

            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                <div class="fh5co-item margin_top">
                    <img src="admin/<?php echo $menucek["anayemek_resimyol"] ?>" class="img-responsive" alt="">
                    <h3><?php echo $menucek["anayemek_ad"] ?></h3>
                    <span class="fh5co-price">₺<?php echo $menucek["anayemek_fiyat"] ?><sup>.00</sup></span>
                    <p><?php echo $menucek["anayemek_detay"] ?></p>
                </div>
            </div>
            <?php }
?>



            <?php

$menusorgu = $db->prepare("select * from gmenu_icecek");
$menusorgu->execute();

while ($menucek = $menusorgu->fetch(PDO::FETCH_ASSOC)) {?>



            <div class="fh5co-item margin_top">
                <img src="admin/<?php echo $menucek["icecek_resimyol"] ?>" class="img-responsive" alt="">
                <h3><?php echo $menucek["icecek_ad"] ?></h3>
                <span class="fh5co-price">₺<?php echo $menucek["icecek_fiyat"] ?><sup>.00</sup></span>
                <p><?php echo $menucek["icecek_detay"] ?></p>
            </div>
            <?php }
?>
            <?php

$menusorgu = $db->prepare("select * from gmenu_tatli");
$menusorgu->execute();

while ($menucek = $menusorgu->fetch(PDO::FETCH_ASSOC)) {?>



            <div class="fh5co-item margin_top">
                <img src="admin/<?php echo $menucek["tatli_resimyol"] ?>" class="img-responsive" alt="">
                <h3><?php echo $menucek["tatli_ad"] ?></h3>
                <span class="fh5co-price">₺<?php echo $menucek["tatli_fiyat"] ?><sup>.00</sup></span>
                <p><?php echo $menucek["tatli_detay"] ?></p>
            </div>
            <?php }
?>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>