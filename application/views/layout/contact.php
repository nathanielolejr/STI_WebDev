<link href="<?php echo base_url('themes/css/title.css'); ?>" rel="stylesheet">
<style>
  #map
  {
    height:400px;
    width:100%;
  }
  </style>
<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Come and Visit</span>
                <br>
                <span class="section-heading-upper">We're Open During</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">10:00 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Week Days
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
              </ul>
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Contacts</span>
              </h2>

              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                Mobile Number
                  <span class="ml-auto">0978-872-2818</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Hotline Number
                  <span class="ml-auto">222-145</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Email
                  <span class="ml-auto">marshweetcafe@gmail.com</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Facebook
                  <span class="ml-auto">Marshweet Cafe</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Instagram
                  <span class="ml-auto">marshweetcafe</span>
                </li>
              </ul>
              <br>
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Location</span>
              </h2>
              <p class="address mb-5">
                <em>
                  Marietta Tower, Echiverri Street
                  <br>
                  Iligan City, Lanao del Norte
                </em>

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

  