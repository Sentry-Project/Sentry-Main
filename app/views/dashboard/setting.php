<?php require APPROOT . '/views/inc/header.php'; ?>


<?php require APPROOT . '/views/inc/left-nav.php'; ?>


    <section id="set-profile">
      <div class="container">
        <div class="set-profile-form">
          <h1>Settings</h1>
		  <h2>Profile</h2>
          <form action="<?php echo URLROOT;?>/users/setting" method="POST">
            <label for="set-name">Full Name</label>
            <input type="name" name="fname" id="first-name" placeholder="Emma" value="<?php echo $data['user']->FIRST_NAME ?>" required/>
			<input type="name" name="lname" id="last-name" placeholder="Watson" value="<?php echo $data['user']->LAST_NAME ?>"required/>
            <label for="new-device">Email Address</label>
            <input type="email" name="email" id="email-address" placeholder ="ewatson@gmail.com" value="<?php echo $data['user']->EMAIL ?>"required/>
            <label for="new-device">Phone Number</label>
            <input type="text" name="number" id="p-number" placeholder = "33 7 12 34 53 2" value="<?php echo $data['user']->PHONE_NUM ?>"required/>
			<label for="new-device">House Address</label>
            <input type="text" name="address" id="house-address" placeholder = "5 rue Dejean, Boulevard,75002"value="<?php echo $data['user']->ADDRESS ?>"required/>
			<label for="new-device" >Emergengy Contact</label>
            <input type="text" name="dnumber" id="emergency-contact" placeholder = "+33 7 12 34 53 2" value="<?php echo (!empty($data['user']->EC_PHONE_NUM) ? $data['user']->EC_PHONE_NUM : '')  ?>"required/>
<br><br>
            <input type="submit" value="Save" >
            
          </form>
         
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>