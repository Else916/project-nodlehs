<!--========================================================
                          FOOTER
=========================================================-->

<section id="contactsection" class="well-sm bg-default-variant-1">
  <div class="container">
    <div class="row flow-offset-1">

      <div class="col-md-4">
        <h3>Follow Us</h3>
        <ul class="inline-list" style="margin-top:19px;">
          <li><a href="https://www.linkedin.com/company/al-dhafra-private-school" class="icon icon-md icon-secondary-2 fa-linkedin"></a></li>
          <li><a href="https://twitter.com/dpsabudhabi" class="icon icon-md icon-secondary-2 fa-twitter"></a></li>
          <li><a href="https://www.facebook.com/Al-Dhafra-Private-School-Abu-Dhabi-216597418506681/" class="icon icon-md icon-secondary-2 fa-facebook"></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Our Gallery<?php //echo anchor('gallery/', 'view all',array('class' => 'hoverWhiteMe')) ?></h3>

        <!-- Owl Carousel -->
        <div class="owl-carousel">
            <div class="item">
              <!-- Touch Touch -->
              <a class="thumb" href="<?php echo $public_folder;?>images/gallery/img01.jpg">
                <img src="<?php echo $public_folder;?>images/gallery/thumbs/img01-thumb.jpg" alt=""/>
                <span class="thumb_overlay"></span>
              </a>
              <!-- END Touch Touch -->
            </div>
            <div class="item">
              <!-- Touch Touch -->
              <a class="thumb" href="<?php echo $public_folder;?>images/gallery/img02.jpg">
                <img src="<?php echo $public_folder;?>images/gallery/thumbs/img02-thumb.jpg" alt=""/>
                <span class="thumb_overlay"></span>
              </a>
              <!-- END Touch Touch -->
            </div>
            <div class="item">
              <!-- Touch Touch -->
              <a class="thumb" href="<?php echo $public_folder;?>images/gallery/img03.jpg">
                <img src="<?php echo $public_folder;?>images/gallery/thumbs/img03-thumb.jpg" alt=""/>
                <span class="thumb_overlay"></span>
              </a>
              <!-- END Touch Touch -->
            </div>
        </div>
        <!-- END Owl Carousel -->
      </div>

        <div class="contactinfo col-md-4">
          <h3>Contact Us</h3>
          <!-- Marked List -->
          <ul class="marked-list italic">
            <li><b><u>Address:</b></u> P.O. Box 25801, ME09 Mohamed Bin Zayed City, Abu Dhabi, UAE</li>
            <li><b><u>Phone:</b></u> 0097126108400 / 0097126108401</li>
            <li><b><u>Fax:</b></u> 0097125599883</li>
            <li><b><u>Email:</b></u> administration@dhafraschools.com</li>
            <li><b><u>Website:</b></u> http://abu-dhabi.dhafraschools.com</li>
          </ul>
          <!-- END Marked List -->
        </div>
    </div>
  </div>
</section>
<!-- Google Map -->
<section class="map">
  <div id="google-map" class="map_model" data-y="24.345459" data-x="54.532"></div>
  <ul class="map_locations">
    <li data-y="24.345459" data-x="54.532">
      <p>ME09 Mohamed Bin Zayed City, Abu Dhabi, UAE. <span>0097126108401</span></p>
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

<div class="modal" id="dpsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

      $(".contactme").click(function() {
        $('html, body').animate({
            scrollTop: $(".contactinfo").offset().top
        }, 3000);
        hideMobileMenu();
      });

      if (!sessionStorage["alertdisplayed"]){
        $('#dpsModal').modal({
                show: true
        }).load(folder_loc + "popup/announcement.html").on("hidden.bs.modal", function() {
  			}).appendTo("body").modal("show");

        sessionStorage["alertdisplayed"] = true;
      }
    });
</script>
</body>
</html>
