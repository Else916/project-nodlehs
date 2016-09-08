<!DOCTYPE html>
<!--
    AUTHOR: Eric Thomas D. Cabigting/ericcabigting@outlook.com
    CREATED DATE: 2016-17-06
    VERSION: v2.00
-->
<HTML>
  <HEAD>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="description" content="Al Dhafra Private Schools - Abu Dhabi, British and American accredited school">
    <meta name="keywords" content="Al Dhafra Private Schools, International School, Education, School, High School, Elementary, Kindergarten, United Arab Emirates, UAE, Abu Dhabi, AUH">
    <meta name="author" content="Eric Thomas D. Cabigting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $public_folder;?>img/favicon.png" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="<?php echo $public_folder;?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $public_folder;?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $public_folder;?>css/dps_reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $public_folder;?>css/fonts-custom.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $public_folder;?>css/dps_style.css">
        <title><?php echo $title . ' - ';?> Al Dhafra Private School</title>
  </HEAD>
  <BODY>
    <!-- body div -->
    <div class="divMainBody" >
      <!-- top head -->
        <div class="divTopHead">
          <!-- <button type="button" class="btn btn-warning btn-top-head dpsRight" ><span class="glyphicon glyphicon-envelope glyp-margin"></span>EMAIL</button> -->
          <button type="button" href="<?php echo site_url();?>login/" class="btn btn-warning btn-top-head dpsRight" ><span class="glyphicon glyphicon-lock glyp-margin"></span>SCHOOL MANAGEMENT SYSTEM</button>
        </div>
      <!-- end top head -->
      <!-- mid head -->
        <div class="divMidHead">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-md-2">
                  <img src="<?php echo $public_folder;?>img/layout/schoollogo.png" class="img-responsive mainLogo" >
                </div>
                <div class="col-xs-12 col-md-10 visible-md-block visible-lg-block headSchoolName" style="text-align:center;padding:1px;">
                  <h1>AL DHAFRA PRIVATE SCHOOL</h1>
                  <h3 style="margin-top:-3px;">British and American Curriculum</h3>
                </div>
              </div>
            </div>
        </div>
      <!-- end mid head -->
      <!-- bottom head -->
        <div class="divBottomHead">
            <img src="<?php echo $public_folder;?>img/layout/campus.jpg" Class="imgCampusBanner img-responsive">
        </div>
      <!-- end bottom head -->
      <!-- navbar container -->
      <div class="divNavBarContainer">
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container-fluid fuckingNavbarContainer">
                <!-- <a class="navbar-brand" vhref="#">Brand</a> -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar">
                      </span><span class="icon-bar">
                      </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav">
                        <li><a href="/"><span class="glyphicon glyphicon-home" style="font-size:15px;"></span></a>
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown">SCHOOL</a>
                              <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('school-profile/vision-and-mission', 'VISSION AND MISSION') ?></li>
                                    <li><?php echo anchor('download/calendar.png', 'SCHOOL CALENDAR','target="_blank"') ?></li>
                    							  <li><?php echo anchor('careers/', 'CAREERS',array('class'=>'dropdown-toggle')) ?></li>
                    							  <li><?php echo anchor('contact-us/', 'CONTACT US') ?></li>
                              </ul>
            						</li>
            						<li><a class="dropdown-toggle" data-toggle="dropdown">ACADEMICS</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?php echo anchor('academics/book-lists', 'BOOK LISTS') ?></li>
                                    <li><?php echo anchor('academics/core-values-beliefs', 'CORE VALUES/BELIEFS') ?></li>
                                    <li><?php echo anchor('academics/expectation-for-student-learning', 'EXPECTATION FOR STUDENT LEARNING') ?></li>
                                    <li><?php echo anchor('academics/graduation-requirements', 'GRADUATION REQUIREMENTS') ?></li>
                                </ul>
            						</li>
            						<li><a class="dropdown-toggle" data-toggle="dropdown">ADMISSION</a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><?php echo anchor('admission/tuition-fees', 'REGISTRATION AND FEES') ?></li>
                                  <li><?php echo anchor('admission/registration', 'NEW ADMISSION / RE-REGISTRATION & FEES POLICY') ?></li>
                              </ul>
            						</li>
            						<li><a class="dropdown-toggle" data-toggle="dropdown">ACTIVITIES</a>
                          <ul class="dropdown-menu" role="menu">
                              <li><?php echo anchor('student-activities/activities-club', 'AL DHAFRA ACTIVITIES CLUB') ?></li>
                              <li><?php echo anchor('student-activities/prophet-tradition-competition', 'HADITH SHARIF COMPETITION') ?></li>
                              <li><?php echo anchor('student-activities/environmental-club', 'ENVIRONMENTAL CLUB') ?></li>
                              <li><?php echo anchor('student-activities/debate-club', 'DEBATE CLUB') ?></li>
                              <li><?php echo anchor('student-activities/young-book-club', 'YOUNG BOOK CLUB') ?></li>
                              <li><?php echo anchor('student-activities/drama-club', 'DRAMA CLUB') ?></li>
                              <li><?php echo anchor('student-activities/high-flyers-club', 'HIGH FLYERS CLUB') ?></li>
                              <li><?php echo anchor('student-activities/glee-club', 'GLEE CLUB') ?></li>
                              <li><?php echo anchor('student-activities/math-for-fun-club', 'MATH FOR FUN CLUB') ?></li>
                              <li><?php echo anchor('student-activities/graduation-ceremony', 'GRADUATION CEREMONY') ?></li>
                              <li><?php echo anchor('student-activities/smart-program', 'SMART PROGRAM') ?></li>
                          </ul>
            						</li>
                        <li><?php echo anchor('gallery/', 'GALLERY',array('class'=>'dropdown-toggle')) ?></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <!-- end navbar container -->
      <!-- main page content -->
      <div class="divMainContentBody container">
        <div class="row" style="margin-top:3px;">
        <!-- page contents starts here -->
