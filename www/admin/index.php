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
                <h1 class="page-head-line">Cafe Paneline Hoşgeldin </h1>
                <h1 class="page-subhead-line">Sitenizi Yönetmek İçin Sol Tarafta Yer Alan Menüleri Kullanabilirsiniz. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        

    </div>
    <!-- /. PAGE INNER  -->
</div>

<?php
include 'footer.php'; ?>
