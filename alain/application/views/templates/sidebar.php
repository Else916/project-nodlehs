<section class="well-md well-md--inset-1 bg-contrast-variant-1">
      <div class="container">
        <div class="row flow-offset-2">
            <div class="col-md-4">
              <h3 class="skin-1">Contact Emails</h3>
                <ul class="list">
    								<li>School Principal: <?php echo safe_mailto('principal.al@dhafraschools.com') ?></li>
                    <li>Vice Principal: <?php echo safe_mailto('principal.asst.al@dhafraschools.com') ?></li>
    								<li>Head of Secondary: <?php echo safe_mailto('b.girven@dhafraschools.com') ?></li>
                    <li>Senco: <?php echo safe_mailto('zaina.suliman@dhafraschools.com') ?></li>
                    <li>Parent Communication Officer: <?php echo safe_mailto('rania.hamaideh@dhafraschools.com') ?></li>
    						</ul>
            </div>
            <div class="col-md-4">
              <h3 class="skin-1">Quick Links</h3>
                <ul class="list">


                  <li><?php echo anchor('admission/required-documents', 'Required Documents') ?></li>
                  <li><?php echo anchor('admission/tuition-fee', 'Tuition Fee') ?></li>
                  <li><?php echo anchor('https://www.nwea.org/', 'MAP Tests') ?></li>
                  <li><?php echo anchor('http://www.advanc-ed.org/', 'AdvancED') ?></li>
                  <li><?php echo anchor('http://www.cie.org.uk/', 'C.I.E.') ?></li>
                  <!-- li><?php echo anchor('download/SchoolCalendar2016-2017.jpg', 'School Calendar 2016 - 2017') ?></li-->
                  <!--li><?php echo anchor('contact-us', 'Location Map') ?></li-->
                  <!--li><?php echo anchor('careers', 'Careers') ?></li-->
                </ul>
            </div>

          <div class="col-md-4">
            <h3>Accreditation Report</h3>
            <!-- List -->
            <ul class="list">
                <li><?php echo anchor('public_html/files/adec-report-arabic.pdf', 'ADEC Inspection Report, Published in 2016 ARABIC', 'target="_blank"' ); ?></li>
                <li><?php echo anchor('public_html/files/adec-report-english.pdf', 'ADEC Inspection Report, Published in 2016 ENGLISH', 'target="_blank"'); ?></li>
                <li><?php echo anchor('public_html/files/advanced-report.pdf', 'AdvancED Report', 'target="_blank"'); ?></li>
            </ul>
            <!-- END List -->
          </div>
        </div>
      </div>
</section>
