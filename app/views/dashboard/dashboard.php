<?php require APPROOT . '/views/inc/header.php'; ?>

<ul> 
  <?php foreach($data['users'] as $user) : ?>
    <li><?php echo $user->FIRST_NAME; ?></li>

  <?php endforeach; ?>

</ul>

  
<!--left navigational bar-->
  <div class="left_nav">
  <i class="fas fa-home fa-4x"></i>
  <li>Emma's Home</li>
  <br>
  <li><a href="#Livingroom">Living Room</a></li>
  <li><a href="#Kitchen">Kitchen</a></li>
  <li><a href="#Bedroom1">Bedroom1</a></li>
  <li><a href="#Foyer">Foyer</a></li>
  <br>
  <br>
  <li>--------</li>
    <li><a href="AddNewRoom.html">Add New Room</a></li>
    <li><a href="Setting.html">Settings</a></li>
    </div>


<div class="module">

   <section id="mysentry">
    <div class="mysentry_heading">My Sentry</div>
    <div class="Alert_heading">Alert</div>
  <!--alert-->
   <div class="alert_container"> 
     <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x"></i></div>
 
     <div class="intro">
        <ul class="list">
        <li>Low battery smoke detector</li>
        <li>Room: living room</li>
        <li>Level: low</li>
        <li>Devices on: 0</li>
        </ul>
     </div>
   </div>

     </br>
     <div class="alert_container"> 
     <div class="photo_2"><i class="fas fa-exclamation-circle fa-3x"></i></div>
     <div class="intro">
        <ul class="list">
        <li>Smoke detectoed</li>
        <li>Room: kitchen</li>
        <li>Level: high</li>
        <li>Devices on: 3</li>
        </ul>
     </div>
   </div>
 </section>


   <p class="note"> All devices automatically switched off</p>


   <section id="overview">
    <div class="overview_heading">Overview</div>
  <div class="container"> 
  <!--dashboardcards-->  
  <div class="con">
    <div class="dashboardcard"> 
    <i class="fas fa-temperature-low fa-3x"></i>
    <div class="desc">Temperature</div>
    <div class="desc_value">24 Celsius</div>
    </div>
   
    <div class="dashboardcard"> 
    <i class="fas fa-wind fa-3x"></i>
    <div class="desc">Gas reading</div>
    <div class="desc_value">27 mpg</div>
    </div>

     <div class="dashboardcard">
    <i class="fas fa-tint fa-3x"></i>
    <div class="desc">Water level</div>
    <div class="desc_value">10 m3</div>
    </div>


    <div class="dashboardcard">
    <div class="desc">Devices</div>
    <div class="conte">Active: 5</div>
    <div class="conte">Inactive: 0</div>
    <div class="conte">Error: 0</div>
    </div>

    <div class="dashboardcard">
    <div class="desc">Sensors</div>
    <div class="conte">Active: 5</div>
    <div class="conte">Inactive: 0</div>
    <div class="conte">Error: 0</div>
    </div> 
  </div>
</div>
</section>
</br>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
