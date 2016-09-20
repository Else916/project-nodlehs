<!--========================================================
                          FOOTER
=========================================================-->

<section class="well-sm bg-default-variant-1">
  <div class="container">
    <div class="row flow-offset-1">

      <div class="col-md-4">
        <h3>Contact Us</h3>
        <!-- Marked List -->
        <ul class="marked-list italic">
          <li><b><u>Address:</b></u> P.O. Box 17814, Manaseer Area, Al Ain, UAE</li>
          <li><b><u>Phone:</b></u> 0097137013999 / 0097137013998</li>
          <li><b><u>Fax:</b></u> 0097137676691</li>
          <li><b><u>Email:</b></u> rania.hamaideh@dhafraschools.com</li>
          <li><b><u>Website:</b></u> http://alain.dhafraschools.com</li>
        </ul>
        <!-- END Marked List -->
      </div>
      <div class="col-md-4">
        <h3>Our Gallery</h3>


        <!-- Owl Carousel -->
        <div class="owl-carousel">

            <div class="item">
              <!-- Touch Touch -->
              <a class="thumb" href="<?php echo $public_folder;?>images/image1-1.jpg">
                <img src="<?php echo $public_folder;?>images/image1.jpg" alt=""/>
                <span class="thumb_overlay"></span>
              </a>
              <!-- END Touch Touch -->
            </div>
            <div class="item">
              <!-- Touch Touch -->
              <a class="thumb" href="<?php echo $public_folder;?>images/image3-3.jpg">
                <img src="<?php echo $public_folder;?>images/image3.jpg" alt=""/>
                <span class="thumb_overlay"></span>
              </a>
              <!-- END Touch Touch -->
            </div>
            <div class="item">
              <!-- Touch Touch -->
              <a class="thumb" href="<?php echo $public_folder;?>images/image2-2.jpg">
                <img src="<?php echo $public_folder;?>images/image2.jpg" alt=""/>
                <span class="thumb_overlay"></span>
              </a>
              <!-- END Touch Touch -->
            </div>
        </div>
        <!-- END Owl Carousel -->
      </div>
      <div class="col-md-4">
        <h3>Follow Us</h3>
        <ul class="inline-list">
          <li><a href="#" class="icon icon-md icon-secondary-2 fa-twitter"></a></li>
          <li><a href="#" class="icon icon-md icon-secondary-2 fa-google-plus"></a></li>
          <li><a href="#" class="icon icon-md icon-secondary-2 fa-facebook"></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Google Map -->
<section class="map">
  <div id="google-map" class="map_model" data-y="24.200957" data-x="55.717926"></div>
  <ul class="map_locations">
    <li data-y="24.200957" data-x="55.717926">
      <p>School Road, Manaseer Area, Al Ain, UAE. <span>0097137013999</span></p>
    </li>
  </ul>
</section>
<!-- END Google Map -->
</main>
<footer class="text-center">
  <div class="container">
    <a href="#">Al Dhafra Private Schools</a>
     &copy; <span id="copyright-year">2016</span> All Rights Reserved |
    <a href="#">Privacy Policy</a>
  </div>
</footer>
</div>

<script src="<?php echo $public_folder;?>js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
      setTimeout(function(){
                  var title = document.getElementsByTagName("title")[0].innerHTML.split("-");
                  if(title[0].trim() != 'Home') {
                    var scrollAmount = $("header").outerHeight(true);
                    $("html, body").animate({ scrollTop: scrollAmount - 25}, 1500);
                  }
      },1000);
    });
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<!-- <script src="<?php echo $public_folder;?>js/main.min.js"></script> -->
</body>
</html>
