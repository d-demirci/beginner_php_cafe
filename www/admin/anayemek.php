<?php 
include 'header.php'; 
include 'sidebar.php'; 

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");

} 

?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Ana Yemekler</h1>


            </div>
            <div class="col-md-12">
                <a href="anayemek_ekle.php"><button class="btn btn-success">Ana Yemek Ekle</button>
                    <hr>
            </div>
            <div class="col-md-12">
                <!--    Hover Rows  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ekli olan Ana Yemekler
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width:200px">Ana Yemek Adı</th>
                                        <th>Ana Yemek Detay</th>
                                        <th style="width:200px">Ana Yemek Fiyat</th>
                                        <th style="width:40px"></th>
                                        <th style="width:40px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                $menusor=$db->query("select * from anayemek");


                                while ($menucek=$menusor->fetch()) {?>

                                    <tr>
                                        <td><?php echo $menucek[ 'anayemek_id'] ?></td>
                                        <td><?php echo $menucek[ 'anayemek_ad'] ?></td>
                                        <td><?php echo $menucek[ 'anayemek_detay'] ?></td>
                                        <td><?php echo $menucek[ 'anayemek_fiyat'] ?></td>

                                        <td><a
                                                href="includes/islem.php?anayemek_id=<?php echo $menucek['anayemek_id']; ?>&anayemeksil=ok"><button
                                                    class="btn btn-danger">Sil</button></a></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Hover Rows  -->
            </div>



        </div>
        <!-- /. ROW  -->


    </div>
    <!-- /. PAGE INNER  -->
</div>

<?php
include 'footer.php'; ?>