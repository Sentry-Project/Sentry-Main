<?php require APPROOT . '/views/inc/header.php'; ?>


  <!--left navigational bar-->
  <div class="left_nav">
    <i class="fas fa-home fa-4x"></i>
    <li>Emma's Home</li>
    <br>
    <li><a href="#Profile">Profile</a></li>
    <li><a href="#Devices">Devices</a></li>
    <li><a href="#Sensors">Sensors</a></li>
    <li><a href="#Rooms">Rooms</a></li>
	<li><a href="#Accounts">Accounts</a></li>
    <br>
    <br>
	  <li>--------</li>
      <li><a href="newroom.html">Add New Room</a></li>
      <li><a href="setting.html">Settings</a></li>
      </div>
      </div>

    <section id="set-profile">
      <div class="container">
        <div class="set-profile-form">
          <h1>Settings</h1>
		  <h2>Profile</h2>
          <form action="">
            <label for="set-name">Full Name</label>
            <input type="name" name="fname" id="first-name" placeholder="Emma">
			<input type="name" name="lname" id="last-name" placeholder="Watson">
            <label for="new-device">Email Address</label>
            <input type="text" name="email" id="email-address" placeholder ="ewatson@gmail.com">
            <label for="new-device">Phone Number</label>
            <input type="text" name="p-number" id="p-number" placeholder = "+33 7 12 34 53 2">  
			<label for="new-device">House Address</label>
            <input type="text" name="address" id="house-address" placeholder = "5 rue Dejean, Boulevard,75002">
			<label for="new-device" >Emergengy Contact</label>
            <input type="text" name="dname" id="emergency-contact" placeholder = "+33 7 12 34 53 2">
<br><br>
            <input type="submit" value="Save" >
            
          </form>

       
          
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>