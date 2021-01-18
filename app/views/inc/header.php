<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- DONT FORGET TO FILL THIS -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- I NEED A BIGGER VERSION OF LOGO -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <link rel="stylesheet"  href="<?php echo URLROOT; ?>/css/style.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<!-- MAIN NAVBAR (THIS IS WHERE YOU WILL COPY FROM and the footer down below haha) -->
<nav id="main-nav">
    <div class="container">
      <img src="<?php echo URLROOT; ?>/images/sentry.png" alt="Sentry Website Logo" class="logo">

      <ul>
        <?php if(isset($_SESSION['user_id'])) :  ?>
          <li><a href="<?php echo URLROOT; ?>/dashboard" >My Sentry</a></li>
          <li><a href="#" >Alert</a></li>
          <li><a href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>


        <?php else: ?>
        <li><a href="<?php echo URLROOT; ?>" >Home</a></li>
        <li><a href="#services" >Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="<?php echo URLROOT; ?>/users/register">Login/Register</a></li>
        <?php endif;  ?>
      </ul>
    </div>
  </nav>

  