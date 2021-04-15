<?php 
include 'header.php'; ?>
<?php 
include 'sidebar.php'; ?>




<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 style=color:red class="page-head-line">Kahvaltı Ekleme</h1>
        
        

     </div>
   </div>
   <!-- /. ROW  -->
  <form action="includes/islem.php" method="POST" enctype="multipart/form-data">

    <div align="center" class="form-group col-md-3"> 
      
      <p align="left"><input class="btn btn-success" type="submit" name="kahvaltikaydet" value="Kahvaltı Kaydet">
      </p>
    </div>
    



    
     




    <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Kahvaltı Adı</label>
        <input class="form-control" type="text" name="kahvalti_ad" placeholder="Kahvaltı Adı Girin">
      </div>


      <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Kahvaltı Fiyat</label>
        <input class="form-control" type="text" name="kahvalti_fiyat" placeholder="Kahvaltı Ücret Girin">
      </div>

      <div class="col-md-3">
        <div class="form-group col-md-12">
          <label>Kahvaltı Detay </label>
          <textarea name="kahvalti_detay" class="ckeditor"></textarea>
        </div>
      </div>
      <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Kahvaltı Resim Yol</label>
        <input class="form-control" type="text" name="kahvalti_resimyol" value="uploads/">
      </div>

    </form>
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label col-lg-12">Kahvaltı Resim</label>
        <div class="">
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <span class="btn btn-file btn-default">
              <span class="fileupload-new">Resim Seç</span>
              <span class="fileupload-exists">Değiştir</span>
              <input type="file" name="kahvalti_resimyol">
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