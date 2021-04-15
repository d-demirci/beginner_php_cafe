<?php 
include 'header.php'; ?>
<?php 
include 'sidebar.php'; ?>




<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 style=color:red class="page-head-line">Ana Yemek Ekleme</h1>
        
        

     </div>
   </div>
   <!-- /. ROW  -->
  <form action="includes/islem.php" method="POST" enctype="multipart/form-data">

    <div align="center" class="form-group col-md-3"> 
      
      <p align="left"><input class="btn btn-success" type="submit" name="anayemek" value="Ana Yemek Kaydet">
      </p>
    </div>
    



    
     




    <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Ana Menü Adı</label>
        <input class="form-control" type="text" name="anayemek_ad" placeholder="Ana Yemek Adı Girin">
      </div>


      <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Ana Yemek Adı</label>
        <input class="form-control" type="text" name="anayemek_fiyat" placeholder="Ana Menü Ücret Girin">
      </div>

      <div class="col-md-3">
        <div class="form-group col-md-12">
          <label>Ana Yemek Detay </label>
          <textarea name="anayemek_detay" class="ckeditor"></textarea>
        </div>
      </div>
    </form>
    <div class="form-group col-md-12">
        <label>Resim yol</label>
        <input class="form-control" type="text" name="anayemek_resimyol" value="uploads/" >
      </div>

    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label col-lg-12">Ana menü Resim</label>
        <div class="">
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <span class="btn btn-file btn-default">
              <span class="fileupload-new">Resim Seç</span>
              <span class="fileupload-exists">Değiştir</span>
              <input type="file" name="anayemek_resimyol">
            </span>
            <span class="fileupload-preview"></span>
            <a href="http://localhost/ism/nedmin/uploads" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /. PAGE INNER  -->
</div>
</div>
<!-- /. PAGE INNER  -->
</div>

<?php
include 'footer.php'; ?>