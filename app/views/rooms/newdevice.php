<?php require APPROOT . '/views/inc/header.php'; ?>


<?php require APPROOT . '/views/inc/left-nav.php'; ?>


    <section id="new-room">
      <div class="container">
        <div class="new-room-form">
          <h2>Add New Device</h2>
          <form action="<?php echo URLROOT;?>/rooms/newdevice" method="post">
            <label for="dname">Device Name</label>
            <input type="text" name="dname" id="dname">
            
    
            

            <input type="submit" value="save device" class="h-btn">
            
          </form>
          
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>