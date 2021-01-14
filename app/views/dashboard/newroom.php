<?php require APPROOT . '/views/inc/header.php'; ?>


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

    <section id="new-room">
      <div class="container">
        <div class="new-room-form">
          <h2>Add New Room</h2>
          <form action="">
            <label for="room-name">Room Name</label>
            <input type="text" name="rname" id="room-name">
            <label for="new-device">Device 1</label>
            <input type="text" name="dname" id="new-device">
            <label for="new-device">Device 2</label>
            <input type="text" name="dname" id="new-device">
            

            <input type="submit" value="save room" class="h-btn">
            
          </form>

          <div class="new-device-icon">
            <i class="fas fa-plus-circle fa-2x"></i>
            <p>Add Another Device</p>
          </div>
          
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>