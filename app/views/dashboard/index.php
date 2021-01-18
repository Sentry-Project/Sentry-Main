<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/left-nav.php'; ?>


<div class="module">

   <section id="mysentry">
    <div class="mysentry_heading">My Sentry</div>
    <div class="Alert_heading">Alert</div>
    <div class="showalert">



  <!--alert-->
   <?php if($data['warning']):?>
   <?php foreach($data['warning'] as $warning):?>
    <?php  if($warning->SENSOR_NAME == 'temperature'and $warning->SENSOR_VALUE >= 45):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: red"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li> Danger: Over high temperature</li>
        </ul>
     </div>
    </div>
  <?php elseif ($warning->SENSOR_NAME == 'co' and $warning->SENSOR_VALUE >= 30 and $warning->SENSOR_VALUE <= 35):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: green"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li>Danger level: low</li>
        </ul>
     </div>
    </div>

   <?php elseif ($warning->SENSOR_NAME == 'co' and $warning->SENSOR_VALUE > 35 and $warning->SENSOR_VALUE <= 45):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: yellow"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li> Danger level: middle</li>
        </ul>
     </div>
    </div>
    <?php elseif ($warning->SENSOR_NAME == 'co' and $warning->SENSOR_VALUE >45):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: red"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li> Danger level: high</li>
        </ul>
     </div>
    </div>
    <?php elseif ($warning->SENSOR_NAME == 'water' and $warning->SENSOR_VALUE > 0.0008 and $warning->SENSOR_VALUE< 0.002):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: green"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li> Danger level: low</li>
        </ul>
     </div>
    </div>
    <?php elseif ($warning->SENSOR_NAME == 'water' and $warning->SENSOR_VALUE >= 0.002 and $warning->SENSOR_VALUE< 0.005):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: yellow"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li> Danger level: middle</li>
        </ul>
     </div>
    </div>
    <?php elseif ($warning->SENSOR_NAME == 'water' and $warning->SENSOR_VALUE >= 0.005):?>
    <div class="alert_container"> 
    <div class="photo_1"><i class="fas fa-exclamation-circle fa-3x" style="color: red"></i></div>
     <div class="intro">
        <ul class="list">
        <li><?php echo $warning->SENSOR_NAME ?> detected</li>
        <li>Room: <?php echo $warning->ROOM_NAME ?></li>
        <li>Value: <?php echo $warning->SENSOR_VALUE ?></li>
        <li> Danger level: high</li>
        </ul>
     </div>
    </div>
  <?php endif;?>
   <?php endforeach; ?>
    
<?php endif; ?>
<?php if($data['shownote']): ?>
    <p class="note"> All devices automatically switched off</p>
    <?php elseif(!$data['shownote']):?>
      <p class="safe">no high danger warnings now</p> 
<?php endif;?>
 </div>

 </section>



   <section id="overview">
    <div class="overview_heading">Overview</div>
  <div class="container"> 
  <!--dashboardcards-->  
  <div class="con">
    <div class="dashboardcard"> 
    <i class="fas fa-temperature-low fa-3x"></i>
    <div class="desc">Temperature</div>
    <div class="desc_value"><?php echo (!empty($data['avgtemp']->ave_tem) ? $data['avgtemp']->ave_tem : '0');?> Celsius</div>
    </div>
   
    <div class="dashboardcard"> 
    <i class="fas fa-wind fa-3x"></i>
    <div class="desc">Gas reading</div>
    <div class="desc_value"><?php echo (!empty($data['gas']->kitchen_gas) ? $data['gas']->kitchen_gas : '0');?>ppm</div>
    </div>

     <div class="dashboardcard">
    <i class="fas fa-tint fa-3x"></i>
    <div class="desc">Water level</div>
    <div class="desc_value"><?php echo (!empty($data['waterlevel']->water_level) ? $data['waterlevel']->water_level : '0');?> m3</div>
    </div>


    <div class="dashboardcard">
    <div class="desc">Devices</div>
    <div class="conte">Active: <?php echo (!empty($data['ondevice']->On_device) ? $data['ondevice']->On_device : '0');?></div>
    <div class="conte">Inactive: <?php echo (!empty($data['offdevice']->Off_device) ? $data['offdevice']->Off_device : '0');?></div>
    </div>

    <div class="dashboardcard">
    <div class="desc">Sensors</div>
    <div class="conte">Active: <?php echo (!empty($data['onsensor']->On_sensor) ? $data['onsensor']->On_sensor: '0');?></div>
    <div class="conte">Inactive: <?php echo (!empty($data['offsensor']->Off_sensor) ? $data['offsensor']->Off_sensor: '0');?></div>
    </div> 
  </div>
</div>
</section>
</br>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
