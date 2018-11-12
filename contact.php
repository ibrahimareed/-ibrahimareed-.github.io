<?php include'includes_des/header.php' ;?>
  <body>
    
    <?php include'includes_des/topbar.php' ;?>
    
    <section class="home-slider  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>تواصل معنا</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
<!--              <p><a href="#" class="btn btn-primary">Download Now!</a></p>-->
            </div>
          </div>
        </div>

      </div>


    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <form dir="rtl" align="right" action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label  for="fname">الاسم</label>
                  <input type="text" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">اللقب</label>
                  <input type="text" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">البريد الالكتروني</label>
                  <input type="email" id="email" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">ضع رسالتك</label>
                  <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="أرسل" class="btn btn-primary btn-lg btn-block">
                </div>
              </div>
            </form>
          </div>
          <div dir="rtl" align="right" class="col-md-1"></div>
          <div class="col-md-4">
            <h5 class="text-uppercase mb-3">العنوان</h5>
            <p class="mb-5">بجوار مصنع أعلاف شربين<br> شربين<br>الدقهلية</p>
            
            <h5 class="text-uppercase mb-3">ارسل لنا بريدا الكترونيا</h5>
            <p class="mb-5"><a href="mailto:info@firstway.com">info@firstway.com</a> <br> 
            
            <h5 class="text-uppercase mb-3">اتصل بنا</h5>
            <p class="mb-5"> (+2) جوال: 70700 012721 <br>  (+2) هاتف: 674 3827 </p>
          </div>
        </div>
      </div>
    </section>
    
    <section dir="rtl" align="right" class="section border-t">
      <div class="container">
        

        
          
          <!-- Map -->
			<div class="map">
				<div class="map-hover" style="width:100%;">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3413.08487738936!2d31.539592885377612!3d31.190659870470242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f77caa73ed7a69%3A0x80016bba334fb444!2z2YHYsdiz2Kog2KjYp9ix2KrYsw!5e0!3m2!1sar!2seg!4v1539971460971" allowfullscreen></iframe>
					
					<div class="map-hover-1"></div>
				</div>
			</div>
			<!-- //Map -->

        
      </div>
    </section>

   <?php include'includes_des/footer.php' ;?>