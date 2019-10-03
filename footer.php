<?php 
include 'admin/netting/baglan.php';
$ayarsor=$db->query("select * from footer",PDO::FETCH_ASSOC);
foreach ($ayarsor as $yaz) {

}

?>
<footer>
    <!-- Container -->
    <div class="container" style="width: 100%">
        <div class="row" >

            <div class="col-lg-5 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                <div class="subscribe">
                    <h4>İletişim</h4>
                    <p>Öneri, şikayet ve dilekleriniz bizim için değerlidir. </p>

                    <form action="admin/netting/islem.php" method="POST" role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız" required="" name="tablo_ad">
                                <input type="number" class="form-control" placeholder="Telefon Numaranız" required="" name="tablo_telefon">
                                <input type="email" class="form-control" id="em" placeholder="E-Mail Adresiniz" required="" name="tablo_email"> 
                                <input type="text" class="form-control" placeholder="Öneri Dilek ve Şikayetiniz" required="" name="tablo_mesaj">
                                <span class="input-group-btn">
                                    <button type="submit" name="ekle" class="btn send_btn">
                                        <i class="glyphicon glyphicon-send"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                <div class="contact_us">
                   <h4>Adres - İletişim</h4><br>

                   <address>
                    <?php echo $yaz['footer_telefon']; ?><br><br>
                    <?php echo $yaz['footer_adres']; ?> <br>
                    Çalışma Saatleri: 07:00 - 18:00
                </address>
            </div>
        </div>

        <div class="col-lg-2 col-sm-4 col-xs-12 pull-right">
            <div class="basic_info">
                <a href=""><img class="footer_logo" src="images/logo2.png" alt=" " /></a>

                    <ul class="list-inline social">
                        
                     <li><a href="index.php" class="fa fa-home"></a></li>
                     <li><a href="<?php echo $yaz['footer_facebook']; ?> " class="fa fa-facebook"></a></li>
                     <li><a href="<?php echo $yaz['footer_instagram']; ?>" class="fa fa-instagram"></a></li>
                 </ul>
                 
                 <div class="footer-copyright">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                     &copy; <?php echo $yaz['footer_footer']; ?>
                 </p> 
                </div>                  
            </div>
        </div>

    </div>
</div><!-- Container end -->
</footer><!-- Footer end -->


<!-- scroll up-->
<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/gmaps.min.js"></script>

        


        <!--main js-->
        <script type="text/javascript" src="js/main.js"></script>
    </body> 
    </html> 