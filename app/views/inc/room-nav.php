<!--left navigational bar-->
<div class="left_nav">
  <i class="fas fa-home fa-4x"></i>
  <li><?php echo $data['user']->FIRST_NAME; ?>'s Home</li>
  <br>

  <?php foreach($data['rooms'] as $room) : ?>
    <li><a class="menu" href="" data-rid="<?php echo $room->ROOM_ID ?>"><?php echo $room->ROOM_NAME; ?></a></li>

  <?php endforeach; ?>

  <br>
  <br>
  <li>--------</li>
    <li><a href="<?php echo URLROOT; ?>/rooms/newroom">Add New Room</a></li>
    <li><a href="<?php echo URLROOT; ?>/users/setting">Settings</a></li>
    </div>