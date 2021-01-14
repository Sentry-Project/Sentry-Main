<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="left-login">
<br>
<br><br>
<h1 type ="h1-left-login">Welcome to <br>Sentry!</h1>
<h2 type ="h2-left-login">Track your home security in real time</h2>
<br>
<h2 type ="h2-left-login">Already have an account?</h2>
<br>
<p><button type = "Login" class="Login"><b><a href ="login.html">SIGN IN</a></b></button></p>
</div>

<div class ="right-login">

 <div class ="login-form">
<h1 type="h1-right-login">Registration</h1>
<br>
<label type= "f_name"><b>Full Name</b></label>

	 <p><input type="f_name" placeholder="First Name" name="f_name" id="f_name" required></input>
&nbsp <input type="l_name" placeholder="Last Name" name="l_name" id="l_name" required></input></p>
<br>
    <label type="email"><b>Email</b></label>

	<p> <input type="email" placeholder="Enter Email" name="email" id="email" required></input></p>
<br>
    <label type="password"><b>Password</b></label>
<br><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" required></input>
<br><br>
    <label type="psw-repeat"><b>Verify Password</b></label>
<br><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required></input>
  <br>
<br><br>
 <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button type="submit" style ="color: #"class="registerbtn">Submit</button></p>
</div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>
