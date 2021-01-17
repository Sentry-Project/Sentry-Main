<?php require APPROOT . '/views/inc/header.php'; ?>


   <!-- HEADER -->
   <header id="main-header">
    <div class="container">
      <div class="header-container">
        <div class="header-content">
          <h1>Track Your Home Safety In Realtime</h1>
          <a href="" class="h-btn h-btn-round">Get Started</a>
        </div>
        <div class="header-image">
          <img src="./images/header-img.png" alt="A woman looking at the controls of home devices on a tablet">
        </div>
      </div>
    </div>
  </header>

  <!-- DIVIDER -->
  <div class="divider divider-down"></div>

  <!-- SERVICES SECTION -->
  <section id="services">
    <div class="container">
      <div class="services-heading">
        <h2>Services</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est praesentium commodi quaerat veritatis architecto qui animi alias? Consequatur, fuga?</p>
      </div>
      

      <div class="h-card-container">
        <!-- FIRE h-card -->
        <div class="h-card">
          <i class="fas fa-fire-alt fa-3x"></i>
          <h2 class="h-card-heading">Fire</h2>
          <p class="h-card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptate odit quibusdam doloremque ab deleniti?</p>
        </div>

      <!-- WATER h-card -->
      <div class="h-card">
        <i class="fas fa-tint fa-3x"></i>
          <h2 class="h-card-heading">Water</h2>
          <p class="h-card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptate odit quibusdam doloremque ab deleniti?</p>
        </div>

         <!-- GAS h-card -->
      <div class="h-card">
        <i class="fas fa-wind fa-3x"></i>
          <h2 class="h-card-heading">Gas</h2>
          <p class="h-card-content ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptate odit quibusdam doloremque ab deleniti?</p>
        </div>

      </div>


    </div>
  </section>

  <!-- DIVIDER -->
  <div class="divider divider-up"></div>

  <!-- CONTACT SECTION -->
  <section id="contact">
    <div class="container">
      <div class="contact-container">

        <div class="contact-form">
          <h2>Contact Us</h2>
          <span id="contact-confirm"></span>
          <form action="">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="telephone">Phone Number</label>
            <input type="tel" name="telephone" id="telephone">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
  
            <input class="h-btn" type="button" onclick="sendEmail()" value="Send">
          </form>
        </div>

        <div class="contact-info">
          <ul>
            <li><i class="fas fa-2x fa-envelope"></i> enquiry@sentry.com</li>
            <li><i class="fas fa-2x  fa-phone-alt"></i> +33 12 43 54 679</li>
            <li><i class="fas fa-2x  fa-clock"></i> 08:00 - 23:00</li>
          </ul>
        </div>

      </div>
     
    </div>
  </section>




  <!-- FOOTER -->
  <footer id="footer">
    <div class="container">
      <p>Copyright &copy; 2020, All Rights Reserved</p>
    </div>
  </footer>

  <?php require APPROOT . '/views/inc/footer.php'; ?>
