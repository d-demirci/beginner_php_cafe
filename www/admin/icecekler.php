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
                <h1 class="page-head-line">İçecekler</h1>
                

            </div>
            <div class="col-md-12">
             <a href="icecekler_ekle.php"><button class="btn btn-success">İçecek Ekle</button>
                <hr>
            </div>
            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan İçecekler
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width:200px">İçecek Adı</th>
                                     
                                    <th>İçecek Detay</th>
                                    <th style="width:200px">İçecek Fiyat</th>
                                    <th style="width:40px"></th>
                                    <th style="width:40px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $menusor=$db->query("select * from icecekler");


                                while ($menucek=$menusor->fetch()) {?>

                                    <tr>
                                        <td><?php echo $menucek[ 'icecek_id'] ?></td>
                                        <td><?php echo $menucek[ 'icecek_ad'] ?></td>
                                        
                                        <td><?php echo $menucek[ 'icecek_detay'] ?></td>
                                        <td><?php echo $menucek[ 'icecek_fiyat'] ?></td>
                                        
                                        <td><a href="includes/islem.php?icecek_id=<?php echo $menucek['icecek_id']; ?>&iceceklersil=ok"><button class="btn btn-danger">Sil</button></a></td>
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
