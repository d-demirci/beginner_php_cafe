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
                <h1 class="page-head-line">Kahvaltılar</h1>
                

            </div>
            <div class="col-md-12">
             <a href="kahvalti_ekle.php"><button class="btn btn-success">Kahvaltı Ekle</button>
                <hr>
            </div>
            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan Kahvaltılar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width:200px">Kahvaltı Adı</th>
                                    <th>Kahvaltı Detay</th>
                                    <th style="width:200px">Kahvaltı Fiyat</th>
                                    <th style="width:40px"></th>
                                    <th style="width:40px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $menusor=$db->query("select * from kahvalti");


                                while ($menucek=$menusor->fetch()) {?>

                                    <tr>
                                        <td><?php echo $menucek[ 'kahvalti_id'] ?></td>
                                        <td><?php echo $menucek[ 'kahvalti_ad'] ?></td>
                                        <td><?php echo $menucek[ 'kahvalti_detay'] ?></td>
                                        <td><?php echo $menucek[ 'kahvalti_fiyat'] ?></td>
                                        <td><a href="netting/islem.php?kahvalti_id=<?php echo $menucek['kahvalti_id']; ?>&kahvaltisil=ok"><button class="btn btn-danger">Sil</button></a></td>
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
