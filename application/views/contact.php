
  <body>
    


 

    <!-- Page Header Start -->
    <div class="page-header" >
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Contact Us</h2>
              <a href="<?php echo base_url('home/index'); ?>">Home</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <div class="row" style="background-color:#F3F5F7">
    <div class="col-md-6 col-md-offset-3" id="form_container">
       
        
        <form role="form" method="post" id="reused_form">

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">
                        Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-primary" type="submit">Send →</button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your message successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div>
    </div>
</div

    <!-- Start Map Section -->
    <div id="google-map"></div>
    <!-- End Map Section -->


    <!-- Footer Section -->
    <footer>
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-sm-6 col-xs-12">
            <h3 class="small-title">
              Contact Info
            </h3>
            <p>
              A powerhouse of cutting-edge education, research & teaching in The World
            </p>  
            <ul class="address">
                <li><i class="fa fa-home"></i> Hemmathagama,Srilanka</li>
                <li><i class="fa fa-phone"></i> 0767676554</li>
                <li><i class="fa fa-envelope"></i> nawshad@hashnative.com</li>
            </ul>        
          </div><!-- Footer Widget Ends -->
          
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-sm-6 col-xs-12">
            <h3 class="small-title">
              Latest News
            </h3>
            <ul class="recent-post">
              <li class="post">
                <a href="<?php echo base_url(); ?>assets/img/flicker/img1.jpg" class="lightbox">
                <img alt="" src="<?php echo base_url(); ?>assets/img/flicker/img1.jpg">
                </a>
                <p class="text">Fightin'the system like true modern <br><span>Nov 05,2016</span></p>
              </li>
              <li class="post">
                <a href="assets/img/flicker/img1.jpg" class="lightbox">
                <img alt="" src="<?php echo base_url(); ?>assets/img/flicker/img2.jpg">
                </a>
                <p class="text">Will we're movin' on up to the east side <br><span>Nov 09,2016</span></p>
              </li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->        

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-sm-6 col-xs-12">
            <h3 class="small-title">
              Our Courses
            </h3>
            <ul class="list">
              <li><a href="#">Web design</a></li>
              <li><a href="#">Android Developer</a></li>
              <li><a href="#">PHP Tranning</a></li>
              <li><a href="#">IOS Developer</a></li>
              <li><a href="#">App Design Package</a></li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-sm-6 col-xs-12">
            <h3 class="small-title">
              College Gallery
            </h3>
            <div class="plain-flicker-gallery">
              <a href="#" title="Pan Masala"><img src="assets/img/flicker/img1.jpg" alt=""></a>
              <a href="#" title="Sports Template for Joomla"><img src="<?php echo base_url(); ?>assets/img/flicker/img2.jpg" alt=""></a>
              <a href="" title="Apple Keyboard"><img src="<?php echo base_url(); ?>assets/img/flicker/img3.jpg" alt=""></a>
              <a href="" title="Hard Working"><img src="<?php echo base_url(); ?>assets/img/flicker/img4.jpg" alt=""></a>
              <a href="" title="Smile"><img src="<?php echo base_url(); ?>assets/img/flicker/img5.jpg" alt=""></a>
              <a href="" title="Puzzle"><img src="<?php echo base_url(); ?>assets/img/flicker/img6.jpg" alt=""></a>
            </div>
          </div><!-- Footer Widget Ends -->
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
      
     
      
    </footer>
    <!-- Footer Section End-->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>

 

  

      <!-- Google Maps API -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>
      <!-- Google Maps JS Only for Contact Pages -->
      <script type="text/javascript">
      var map;
      var defult = new google.maps.LatLng(55.8638037, -4.2834354,13.67);
      var mapCoordinates = new google.maps.LatLng(55.8638037, -4.2834354,13.67); 
      
      
      var markers = [];
      var image = new google.maps.MarkerImage(
        'assets/img/map-marker.png',
        new google.maps.Size(84, 70),
        new google.maps.Point(0, 0),
        new google.maps.Point(60, 60)
      );
      
      function addMarker() {
        markers.push(new google.maps.Marker({
          position: defult,
          raiseOnDrag: false,
          icon: image,
          map: map,
          draggable: false
        }
      ));
        
      }
      
      function initialize() {
        var mapOptions = {
          backgroundColor: "#ffffff",
          zoom: 15,
          disableDefaultUI: true,
          center: mapCoordinates,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: [{
            "featureType": "landscape.natural",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#ffffff"
            }
                       ]
          }
                   , {
                     "featureType": "landscape.man_made",
                     "stylers": [{
                       "color": "#ffffff"
                     }
                                 , {
                                   "visibility": "off"
                                 }
                                ]
                   }
                   , {
                     "featureType": "water",
                     "stylers": [{
                       "color": "#80C8E5"
                     }
                                 , {
                                   "saturation": 0
                                 }
                                ]
                   }
                   , {
                     "featureType": "road.arterial",
                     "elementType": "geometry",
                     "stylers": [{
                       "color": "#999999"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text.stroke",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#333333"
                     }
                                ]
                   }
                   
                   , {
                     "featureType": "road.local",
                     "stylers": [{
                       "color": "#dedede"
                     }
                                ]
                   }
                   , {
                     "featureType": "road.local",
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#666666"
                     }
                                ]
                   }
                   , {
                     "featureType": "transit.station.bus",
                     "stylers": [{
                       "saturation": -57
                     }
                                ]
                   }
                   , {
                     "featureType": "road.highway",
                     "elementType": "labels.icon",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "featureType": "poi",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   
                  ]
          
        }
            ;
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        addMarker();
        
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </body>
</html>