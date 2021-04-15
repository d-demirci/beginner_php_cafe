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
                <h1 class="page-head-line">Tatlılar</h1>
                

            </div>
            <div class="col-md-12">
             <a href="tatlilar_ekle.php"><button class="btn btn-success">Tatlı Ekle</button>
                <hr>
            </div>
            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan Tatlılar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width:200px">Tatlı Adı</th>
                                    <th>Tatlı Detay</th>
                                    <th style="width:200px">Tatlı Fiyat</th>
                                    <th style="width:40px"></th>
                                    <th style="width:40px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $menusor=$db->query("select * from tatlılar");


                                while ($menucek=$menusor->fetch()) {?>

                                    <tr>
                                         <td><?php echo $menucek[ 'tatli_id'] ?></td>
                                        <td><?php echo $menucek[ 'tatli_ad'] ?></td>
                                        <td><?php echo $menucek[ 'tatli_detay'] ?></td>
                                         <td><?php echo $menucek[ 'tatli_fiyat'] ?></td>
                                        <td><a href="netting/islem.php?tatli_id=<?php echo $menucek['tatli_id']; ?>&tatlilarsil=ok"><button class="btn btn-danger">Sil</button></a></td>
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
