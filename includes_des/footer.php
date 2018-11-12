

<?php include 'fun/connect.php';

$getdata = "SELECT * FROM site_info";
$fetchdata = $conn->query($getdata);
$site_row= $fetchdata->fetch_assoc();

    $id       = $site_row['site_info_id'];
    $favicon      = $site_row['fav_icon'];
    $sitetitle    = $site_row['site_title'];
    $sitelogo     = $site_row['site_logo']; 
    $logotitle    = $site_row['logo_title'];
    $siteheader   = $site_row['site_header'];
    $facebook     = $site_row['facebook_account'];
    $twitter      = $site_row['twitter_account'];
    $linkedin     = $site_row['linkedin_account'];
    $insta        = $site_row['insta_account'];
    $email        = $site_row['email'];
    $telephone    = $site_row['telephone'];
    $address      = $site_row['address'];

?>



    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row">


          <div class="col-md-3">



            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p  class="copyright">  All rights reserved | Brought to you by <a href="#" target="_blank">FIRST WAY</a></p><script>document.write(new Date().getFullYear());</script>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>




          <div class="col-md-3">
            <ul dir="rtl" align="right"  class="list-unstyled footer-link">
                
                
              <li class="d-flex"><span class="mr-3">   العنوان:   </span><span class="text-black"> <?=$address ;?></span></li>
                
                
              <li class="d-flex"><span class="mr-3">هاتف :</span><span class="text-black"  ><?=$telephone ;?></span></li>
              <li class="d-flex"><span class="mr-3">بريد إلكتروني:</span><span class="text-black"><?= $email ;?></span></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 >خريطة الموقع</h3>
            <ul  class="list-unstyled footer-link">
              <li><a href="#">من نحن</a></li>
              <li><a href="#">الخدمات</a></li>
              <li><a href="#">الاعمال</a></li>
              <li><a href="#">اتصل بنا</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>للتواصل الاجتماعي</h3>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="<?= $twitter ;?>" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="<?= $facebook ;?>" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="<?= $linkedin ;?>" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="<?= $insta ;?>" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->



    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>

    
  </body>
</html>