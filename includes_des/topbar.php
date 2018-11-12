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
    $telephone      = $site_row['telephone'];
    $address      = $site_row['address'];

?>
<header role="banner">



      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        
        <div class="container">

          <a class="navbar-brand" href="arindex.php"><img src="admin/fun/uploads/<?=$sitelogo ;?>" style="width: 45px; height: 35px;" />  <?=$logotitle ;?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div  style="margin-left:150px;" class="collapse navbar-collapse" id="navbarsExample05">
              
              
            <ul dir="rtl" align="right" class="navbar-nav mr-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link " href="arindex.php">الرئيسية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="services.php"> الخدمات </a>
              </li>
<!--               <li class="nav-item dropdown">
                <a class="nav-link " href="services.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  الخدمات </a>
                  

                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="services.php">Metal Roofing</a>
                  <a class="dropdown-item" href="services.php">General Contracting</a>
                  <a class="dropdown-item" href="services.php">House Renovation</a>
                  <a class="dropdown-item" href="services.php">Laminate Flooring</a>
                  <a class="dropdown-item" href="services.php">Construction Consultant</a>
                </div>
 

              </li>
-->
              <li class="nav-item">
                <a class="nav-link" href="works.php">أعمالنا</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="about.php">عن الشركة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">اتصل بنا</a>
              </li>

            </ul>




<!--
            <ul class="navbar-nav ml-auto cta-btn">
              <li class="nav-item">
                <a dir="rtl" align="right" class="nav-link" href="get-quote.php">
                  تواصل <br> معنا
                </a>

              </li>


            </ul>
-->


                 <div class="btn-group btn-group-toggle btn-sm" >
  
    
 
    <a class="btn-group btn-group-toggle btn-sm" href="index.php"> EN</a>

          </div>

        </div>

  
</div>
      </nav>
    </header>
    <!-- END header -->