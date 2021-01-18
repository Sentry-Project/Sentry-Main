<?php
// Load config
require_once 'config/config.php';

//load helper 

require_once 'helpers/url_helper.php';
require_once 'helpers/session.php';
require_once 'helpers/test_input.php';

use PHPMailer\PHPMailer\PHPMailer;

//Load libraries
// require_once 'libraries/core.php';
// require_once 'libraries/controller.php';
// require_once 'libraries/database.php';
require_once 'libraries/PHPMailer/PHPMailer.php';
require_once 'libraries/PHPMailer/SMTP.php';
require_once 'libraries/PHPMailer/Exception.php';

//autoload core libraries
 spl_autoload_register(function($className)
 {
   require_once 'libraries/' . $className . '.php';
 });