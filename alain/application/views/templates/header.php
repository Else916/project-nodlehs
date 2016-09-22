<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title . ' - ';?> Al Dhafra Private School</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="<?php echo $public_folder;?>images/favicon.png" type="image/x-icon">
  <script type="text/javascript">
    var folder_loc = '<?php echo $public_folder;?>';
  </script>
  <meta name="description" content="Al Dhafra Private Schools - Al Ain, British and American accredited school">
  <meta name="keywords" content="Al Dhafra Private Schools, International School, Education, School, High School, Elementary, Kindergarten, United Arab Emirates, UAE, Abu Dhabi, AUH">
  <meta name="author" content="Eric Thomas D. Cabigting">

  <link href='<?php echo $public_folder;?>css/font-awesome.min.css' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Asap:400italic,400,700italic,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="<?php echo $public_folder;?>css/grid.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/camera.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/rd-mailform.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/owl-carousel.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/touchtouch.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/google-map.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/isotope.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/bootstrap.modal.css">
  <link rel="stylesheet" href="<?php echo $public_folder;?>css/style.css">


  <script src="<?php echo $public_folder;?>js/jquery.js"></script>
  <script src="<?php echo $public_folder;?>js/jquery-migrate-1.2.1.js"></script>

  <!--[if lt IE 9]>
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

<script src='<?php echo $public_folder;?>js/device.min.js'></script>
</head>
<body>
<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
  <header>
    <!-- Stuck Container -->
    <div id="stuck_container" class="stuck_container stuck_container-mod">
      <div class="container">

        <!-- Brand -->
        <div class="brand">
          <img  src="<?php echo $public_folder;?>images/schoollogo.png" alt="">
          <a href="./" class="brand_name">AL DHAFRA PRIVATE SCHOOL</a>
        </div>
        <!-- END Brand -->

        <!-- Menu  -->
        <nav class="nav">
          <ul class="sf-menu" data-type="navbar">
            <li class="active"><?php echo anchor('/', 'Home') ?></li>
            <li><a href='#'>School</a>
              <ul>
                <li><?php echo anchor('school-profile/vision-and-mission', 'Vision and Mission') ?></li>
                <li><?php echo anchor('school-profile/core-values-beliefs', 'Core Values and Beliefs') ?></li>
                <li><?php echo anchor('school-profile/canteen-menu', 'Canteen Menu') ?></li>
                <li><?php echo anchor('school-profile/uniform', 'Grade 12 Uniform Requirements') ?></li>
                <li><?php echo anchor('school-profile/school-calendar', 'School Calendar') ?></li>
                <li><?php echo anchor('school-profile/school-schedule', 'School Schedule') ?></li>
                <li><?php echo anchor('school-profile/school-newsletter', 'School Newsletter') ?></li>
              </ul>
            </li>
            <li><a href='#'>Academics</a>
              <ul>
                <li><?php echo anchor('academics/expectation-for-student-learning', 'Expectation for Student Learning') ?></li>
                <li><?php echo anchor('academics/graduation-requirements', 'Graduation Requirements') ?></li>
              </ul>
            </li>
            <li><a href='#'>Admission</a>
              <ul>
              <li><?php echo anchor('admission/required-documents', 'Documents') ?></li>
                <li><?php echo anchor('admission/uniform-packages', 'uniform') ?></li>
                <li><?php echo anchor('admission/tuition-fee', 'Fees') ?></li>
                <li><?php echo anchor('admission/registration', 'New Admission/Re-Registration and Fees Policy') ?></li>
              </ul>
            </li>
            <li><?php echo anchor('login', 'School Management <br> System') ?></li>

            <!--li><a href='index-4.html'>Gallery</a></li-->

          </ul>
        </nav>
        <!-- END Menu -->

      </div>
    </div>
    <!-- END Stuck Container -->
