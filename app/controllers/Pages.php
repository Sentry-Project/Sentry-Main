<?php

use PHPMailer\PHPMailer\PHPMailer;

class Pages extends Controller {
  public function __construct()
  {
    
  }

  public function index(){
     $data = [
      'title' => 'Welcome'
    ];

    $this->view('pages/index', $data);
  }

  public function register(){
    $data = [
     'title' => 'Welcome'
   ];

   $this->view('pages/register', $data);
 }

  public function contactForm(){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['message'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $telephone = $_POST['telephone'];
      $message = $_POST['message'];

      $mail = new PHPMailer();

      // SMTP
      $mail->isSMTP();
      $mail->Host = "smtp.gmail.com";
      $mail->SMTPAuth = true;
      $mail->Username = "";
      $mail->Password = "";
      $mail->Port = 465;
      $mail->SMTPSecure = 'ssl';

      // Email settings
      $mail->isHTML(true);
      $mail->setFrom($email, $name);
      $mail->addAddress("");
      $mail->Subject = "Contact Form";
      $mail->Body = $message . ". This is from " . $telephone;

      if($mail->send()){
        $status = "success";
        $response = "Email is sent";
      } else{
        $status = "failed";
        $response = "wrong" . $mail->ErrorInfo;
        
      }
      exit(json_encode(array("status" => $status, "response" => $response)));
    }



    

}

}