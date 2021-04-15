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
                <h1 class="page-head-line">Kayıtlı Rezervasyonlar</h1>
        
            </div>
          
            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width:200px">Kişi ADI</th>
                                    <th>Kişi Sayısı</th>
                                    <th style="width:200px">Rezervasyon Tarih</th>
                                    <th style="width:200px">Telefon Numarası</th>
                                    
                                    <th style="width:40px"></th>
                                    <th style="width:40px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $menusor=$db->query("select * from rezervasyon ORDER BY rezervasyon_id DESC");


                                while ($menucek=$menusor->fetch()) {?>

                                    <tr>
                                        <td><?php echo $menucek[ 'rezervasyon_id'] ?></td>
                                        <td><?php echo $menucek[ 'kisi_ad'] ?></td>
                                        <td><?php echo $menucek[ 'kisi_sayisi'] ?></td>
                                        <td><?php echo $menucek[ 'rezervasyon_tarih'] ?></td>
                                        <td><?php echo $menucek[ 'kisi_tel'] ?></td>
                                        
                                       
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