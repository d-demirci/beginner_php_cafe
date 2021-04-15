<?php include 'header.php';?>

<div id="fh5co-featured-menu" class="fh5co-section">
    <div class="container">
        <div class="row">
            <tr>
                <table>
                    <div id="fh5co-featured-menu" class="fh5co-section">
                        <div class="container">
                            <div class="row">
                                <?php

$menusorgu = $db->prepare("select * from tatlılar");
$menusorgu->execute();

while ($menucek = $menusorgu->fetch(PDO::FETCH_ASSOC)) {?>

                                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item margin_top">
                                        <img src="admin/<?php echo $menucek["tatli_resimyol"] ?>" class="img-responsive"
                                            alt="">
                                        <h3><?php echo $menucek["tatli_ad"] ?></h3>
                                        <span
                                            class="fh5co-price">₺<?php echo $menucek["tatli_fiyat"] ?><sup>.00</sup></span>
                                        <p><?php echo $menucek["tatli_detay"] ?></p>
                                    </div>
                                </div>
                                <?php }
?>

            </tr>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php';?>