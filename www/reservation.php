<?php include 'header.php';?>


<div id="fh5co-reservation-form" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 fh5co-heading animate-box">
                <h2>Rezervasyon</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Cafemizde Misafirlerimiz Saat 19:00 ile 22:00 Saatleri Arasında Rezervasyon İle Giriş
                            Yapabileceklerdir Rezervasyon Dışında Misafir Kabul Edilmeyecektir.
                            Rezervasyon Kontrolü Kisi ad ve telefon numarasına göre yapılacaktır rezervasyon yaptığınız
                            bilgileri unutmayınız.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
                <form action="islem.php" method="POST" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Adınız</label>
                            <input type="text" class="form-control" name="kisi_ad">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Kişi Sayısı</label>
                            <input type="text" class="form-control" name="kisi_sayisi">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Tarih</label>
                            <input type="text" class="form-control" name="rezervasyon_tarih">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>Telefon Numarası</label>
                            <input type="text" class="form-control" name="kisi_tel">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-outline btn-lg" name="rezervasyonkaydet"
                                value="Kaydet">
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>

<?php include 'footer.php';?>
