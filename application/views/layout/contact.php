<link href="<?php echo base_url('themes/css/title.css'); ?>" rel="stylesheet">
<style>
  #map
  {
        width: 100%;
        height: 400px;   
  }
  </style>


<section class="page-section clearfix" id='home-section'>
      <div class="container">
        <div class="intro" style="padding-left: 8%;">
          <!-- <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php //echo base_url('themes/img/home.jpg'); ?>" alt=""> -->
          <div class="text-center bg-faded3 p-5 col-md-11 rounded" style="">
            <div class="row" >
              <section class="page-section about-heading">
      <div class="container">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
            <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Come and Visit</span>
                <br>
                <span class="section-heading-lower2">-We're Open-</span>
              </h2>
                        
                        <h5 class="info">
                        -Saturday-<br/>
                        10:00 AM to 5:00 PM<br/>
                        <br>
                        
                        -Week Days-<br/>
                        7:00 AM to 8:00 PM<br/>
                        </h5>
              <br>
              <br>
              <br>
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower2">-Contacts-</span>
                        </h2>
                        <h5 class="info">
                        -Mobile Number-<br/>
                        0978-872-2818<br/>
                        <br>
                        -Hotline Number-<br/>
                        222-1454<br/>
              <br>
              <br>
              <br>
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower2">-Social Media-</span>
                        </h2>
                        <h5 class="info">
                        -Gmail-</br>
                        <a target="_blank" href="https://mail.google.com/mail/u/1/#inbox" class="buton">marshweetcafe@gmail.com</a></br>
                        -Facebook-<br/>
                        <a target="_blank" href="https://www.facebook.com/" class="buton" >Marshweet Cafe</a> 
                        <br>
                        -Instagram-<br/>
                        <a target="_blank" href="https://www.instagram.com/" class="buton" >marshweetcafe</a><br/>
                        </h5>

                       
              <br>
              <br>  
              <br>
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower2">-Location-</span>
              </h2>
                        <h5 class="info">
                        Marietta Tower, Echiverri Street<br/>
                        Iligan City, Lanao del Norte<br/>
                        
                <br>
                <br>

                <div id="map"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: 8.228942, lng: 124.239036};
                    var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: uluru
                  });
                    var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                  });
                }
                </script>
    
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRx4TZWfYjIrlRfLhNTZH5M3ki_UJvmJ4&callback=initMap">
                </script>

              </p>  
              








            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>
</div>
</section>
