<?php require APPROOT . '/views/inc/header.php'; ?>

<div class = "left-login">
<br><br><br>
<h1 class ="h1-left-login">Welcome to<br> Sentry!</h1>
<h2 class ="h2-left">Track your home security in real time</h2>
<br>
<h2>Do you want to Register?</h2>
  <br>
	<button type="Login" ><a href ="register.html"><b>Register</b></button>
</div>

<div class = "right-login">

 <div class ="login-form">

<h1 type="h1-right-login">Login</h1>
<br><br>

  <label type="email"><b>Email</b></label>
<br>
	<input type="email" placeholder="Enter Email" name="email" id="email" required></input></p>

<br>
    <label type="password"><b>Password</b></label>
<br><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" required></input>


 <br> <br> <br> <br>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" style ="color: #"class="Login" href="dashboard.html">Login</button></p>

</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>