<link href="<?php echo base_url('themes/css/title.css'); ?>" rel="stylesheet">
<style>
  #map
  {
        width: 100%;
        height: 400px;   
  }
  </style>

<div class="col-md-6">
            <div>
                <div class="panel panel-default">
                  
                        
                        </div>
                        
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
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
                        -Email-<br/>
                      marshweetcafe@gmail.com<br/>
                        <br>
                        -Facebook-<br/>
                        Marshweet Cafe<br/>
                        <br>
                        -Instagram-<br/>
                        marshweetcafe<br/>
                        </h5>
              <br>
              <br>  
              <br>
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower2">-Location-</span>
              </h2>
                        
                        <div>
                        Marietta Tower, Echiverri Street<br />
                        Iligan City, Lanao del Norte<br />
                        
                        </div>
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

  