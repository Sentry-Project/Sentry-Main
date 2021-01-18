<?php require APPROOT . '/views/inc/header.php'; ?>


<?php require APPROOT . '/views/inc/left-nav.php'; ?>


    <section id="new-room">
      <div class="container">
        <div class="new-room-form">
          <h2>Add New Room</h2>
          <form action="<?php echo URLROOT;?>/rooms/newroom" method="post">
            <label for="room-name">Room Name</label>
            <input type="text" name="rname" id="room-name">
            <label for="new-device">Device 1</label>
            <input type="text" name="dname" id="new-device">
            <!-- <label for="new-device">Device 2</label>
            <input type="text" name="dname" id="new-device"> -->
            

            <input type="submit" value="save room" class="h-btn">
            
          </form>

          <div class="new-device-icon">
            <i class="fas fa-plus-circle fa-2x"></i>
            <p class="add-btn">Add Another Device</p>
          </div>
          
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>