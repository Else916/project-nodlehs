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
  <meta name="description" content="Al Dhafra Private Schools - Abu Dhabi, British and American accredited school">
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
          <a href="home" class="brand_name">AL DHAFRA PRIVATE SCHOOL</a>
        </div>
        <!-- END Brand -->

        <!-- Menu  -->
        <nav class="nav">
          <ul class="sf-menu" data-type="navbar">
            <li><a href='#'>Admission</a>
              <ul>
                <li><?php echo anchor('http://adsict.ethdigitalcampus.com/DCWeb/form/jsp_aaa/olAdmission_Bahrain.jsp?dbConnVar=ADS&portalFlag=adm', 'Online') ?></li>
                <li><?php echo anchor('admission/required-documents', 'Documents') ?></li>
                <li><?php echo anchor('download/RegistrationForm.pdf', 'Registration Form') ?></li>
                <li><?php echo anchor('admission/tuition-fee', 'Fees') ?></li>
                <li><?php echo anchor('admission/policy', 'Policy') ?></li>
              </ul>
            </li>
            <li><a href='#'>School</a>
              <ul>
                <li><?php echo anchor('school/assessments-policies', 'Assessments Policies') ?></li>
                <li><?php echo anchor('school/child-protection-policy-en', 'Child Protection Policy') ?></li>
                <li><?php echo anchor('school/code-of-conduct', 'Code of Conduct') ?></li>
                <li><?php echo anchor('school/curriculum', 'Curriculum') ?></li>
                <li><?php echo anchor('school/dress-code-policy', 'Dress Code Policy') ?></li>
							  <li><?php echo anchor('school/message-from-the-principal', 'Message from the Principal') ?></li>
                <li><?php echo anchor('school/objectives', 'Objectives') ?></li>
                <li><?php echo anchor('school/tardy-policy-and-procedures', 'Tardy Policy and Procedures') ?></li>
                <li><?php echo anchor('school/schedule', 'School Schedule') ?></li>
							  <li><?php echo anchor('school/vision-mission-values-beliefs', 'Vision, Mission, Values & Beliefs') ?></li>
              </ul>
            </li>
            <li><a href='#'>Downloads</a>
              <ul>
                <li><a href="#">Parents Guides</a>
                  <ul>
                    <li><?php echo anchor('download/ParentPortalGuide.pdf', 'Parent Portal Guide') ?></li>
                    <li><?php echo anchor('download/ParentPortalVideo.mp4', 'Parent Portal Video') ?></li>
                    <li><?php echo anchor('download/ParentPortalWeeklyPlanGuide.pdf', 'Parent Portal Weekly Plan Guide') ?></li>
                    <li><?php echo anchor('download/ParentPortalReportCardGuide.pdf', 'Parent Portal Report Card Guide') ?></li>
                    <li><a href="#">D6 Communicator</a>
                        <ul>
                          <li><?php echo anchor('download/Dear_Parents_D6_Arb.pdf', 'Arabic') ?></li>
                          <li><?php echo anchor('download/Dear_Parents_D6_Eng.pdf', 'English') ?></li>
                        </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Abu Dhabi Science Festival</a>
                  <ul>
                    <li><?php echo anchor('download/ADSF-2015-AR.pdf', 'Abu Dhabi Science Festival Info(Arabic)') ?></li>
                    <li><?php echo anchor('download/ADSF-2015-EN.pdf', 'Abu Dhabi Science Festival Info(English)') ?></li>
                  </ul>
                </li>
                <li><a href="#">Medical Forms</a>
                  <ul>
                    <li><?php echo anchor('download/MedicalForm-EN.pdf', 'Medical Registration Form(English)') ?></li>
                    <li><?php echo anchor('download/MedicalForm-AR.pdf', 'Medical Registration Form(Arabic)') ?></li>
                    <li><?php echo anchor('download/Consent-Form-Measles-Campaign-Student.docx', 'Consent Form Measles Campaing Students') ?></li>
                  </ul>
                </li>
                <li><?php echo anchor('download/SchoolCalendar2016-2017.jpg', 'School Calendar 2016 - 2017') ?></li>
                <li><?php echo anchor('download/CIEExam2015-2016-JUNE.pdf', 'IGCSE, AS & AL CIE Exam Timetable 2015-2016') ?></li>
                <li><?php echo anchor('download/CheckpointCIEExam2015-2016-MAY.pdf', '9IG Checkpoint CIE Exam Timetable 2015-2016') ?></li>
              </ul>
            </li>
            <!-- <li><?php //echo anchor('gallery', 'Gallery') ?></li> -->
            <li><a href='<?php echo site_url();?>login/'>School Management System</a></li>
          </ul>
        </nav>
        <!-- END Menu -->

      </div>
    </div>
    <!-- END Stuck Container -->
