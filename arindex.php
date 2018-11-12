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


<?php
include 'includes_des/header.php';

?>








  <body>
    
    
     <?php include 'includes_des/topbar.php';?>




        <section class="home-slider owl-carousel">
          <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
            
            <div class="container">
              <div class="row slider-text align-items-center justify-content-center text-center">
                <div class="col-md-7 col-sm-12 element-animate">
                  <h1>نبني مستقبل أفضل</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
<!--                  <p><a href="#" class="btn btn-primary">Download Now!</a></p>-->
                </div>
              </div>
            </div>

          </div>

          <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
            <div class="container">
              <div class="row slider-text align-items-center">
                <div class="col-md-8 col-sm-12 element-animate">
                  <h1>استثمار &amp;   تطوير عقاري</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
              </div>
            </div>
            
          </div>
            
            <div class="slider-item" style="background-image: url('img/slider-3.jpg');">
            <div class="container">
              <div class="row slider-text align-items-center">
                <div class="col-md-8 col-sm-12 element-animate">
                  <h1>استثمار &amp;   تطوير عقاري</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
              </div>
            </div>
            
          </div>

        </section>
    <!-- END slider -->


    <section class="container cta-overlap">
      <div class="text d-flex">
        <h2 class="h3"><?= $siteheader ;?></h2>
        <div class="ml-auto btn-wrap">
          <a href="contact.php" class="btn-cta btn btn-outline-white">تواصل معنا</a>
        </div>
      </div>
    </section>
    <!-- END section -->
    
      <section class="section">
        <div class="container">

          <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center">
              <h2 class="text-uppercase heading border-bottom mb-4">الخدمات</h2>
              <p class="mb-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>

          <div class="row mb-5">

            <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
              <div class="media d-block media-feature text-center">
                <span class="flaticon-blueprint icon"></span>
                <div class="media-body">
                  <h3 class="mt-0 text-black">تطوير عقاري</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p><a href="#" class="btn btn-outline-primary btn-sm">المزيد</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
              <div class="media d-block media-feature text-center">
                <span class="flaticon-building-1 icon"></span>
                <div class="media-body">
                  <h3 class="mt-0 text-black">استثمارات</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p><a href="#" class="btn btn-outline-primary btn-sm">المزيد</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
              <div class="media d-block media-feature text-center">
                <span class="flaticon-crane icon"></span>
                <div class="media-body">
                  <h3 class="mt-0 text-black">مقاولات عامة</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p><a href="#" class="btn btn-outline-primary btn-sm">المزيد</a></p>
                </div>
              </div>
            </div>
            
          </div>
          <!-- END row -->
          <div class="row justify-content-center element-animate"> 
            <div class="col-md-4"><p><a href="services.php" class="btn btn-primary btn-block">جميع خدماتنا</a></p></div>
          </div>
        </div>
      </section>
    <!-- END section -->

    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">أعمالنا الحالية</h2>
            <p class="mb-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p><a href="works.php" class="btn btn-primary">جميع أعمالنا</a></p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>صن ست 1</h3>
              <span class="ion-plus icon"></span>
              <img src="img/work_thumb_1.jpg" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>صن ست 2</h3>
              <span class="ion-plus icon"></span>
              <img src="img/work_thumb_2.jpg" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>صن ست 3</h3>
              <span class="ion-plus icon"></span>
              <img src="img/work_thumb_3.jpg" alt="Image placeholder" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->



  
    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">جديد شركتنا</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>
        <div class="row element-animate">
          <div class="major-caousel js-carousel-1 owl-carousel">
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 8</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 2</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 5</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 7</a>
                  </p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 1</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 4</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 12</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="img/work_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">المزيد</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 14</a>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->
    
<!--
    <section class="section">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Testimonial</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 element-animate">
            <div class="media d-block media-testimonial text-center">
              <img src="img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-3">
              <p>Jane Doe, <a href="#">XYZ Inc.</a></p>
              <div class="media-body">
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>  
                </blockquote>

              </div>
            </div>
          </div>

          <div class="col-md-6 element-animate">
            <div class="media d-block media-testimonial text-center">
              <img src="img/person_3.jpg" alt="Image placeholder" class="img-fluid mb-3">
              <p>John Doe, <a href="#">XYZ Inc.</a></p>
              <div class="media-body">
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>  
                </blockquote>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
-->

<?php include 'includes_des/footer.php';?>
