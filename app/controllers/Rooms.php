<?php

class Rooms extends Controller {
  public function __construct()
  {
    if(LoggedIn()){
      redirect('users/login');
    }

    $this->roomModel = $this->model('Room');
    $this->userModel = $this->model('User');
    $this->sensorModel = $this->model('Sensor');
    $this->deviceModel = $this->model('Device');
  }

  // public function index(){
  //    $data = [
  //     'title' => 'Welcome'
  //   ];

  //   $this->view('pages/index', $data);
  // }

  public function newroom(){
    $id = $_SESSION['user_id'];
    $user = $this->userModel->getUser($id);
    $rooms = $this->roomModel->getRooms($id);
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sixRandomDigit = mt_rand(100000,999999);
    $fiveRandomDigit = mt_rand(10000,99999);
    $fourRandomDigit = mt_rand(1000,9999);
    $threeRandomDigit = mt_rand(100,999);

    $data = [
      'user' => $user,
      'room' => $rooms,
      'room_id' => $fourRandomDigit,
      'device_id' => $threeRandomDigit,
      'user_id' => $_SESSION['user_id'],
      'room_name' => trim($_POST['rname']),
      'device_status' => 0,
      'device_name' => trim($_POST['dname']),
      'sensor_id'=> $fiveRandomDigit,
      'sd_id'=> $sixRandomDigit,
      'room_name_err' => '',
      'device_name_err' => ''
    ];

      // Validate room name
      if(empty($data['room_name'])) {
        $data['room_name_err'] = 'Please enter Room Name';
      }

      //Validate device name
      if(empty($data['device_name'])) {
        $data['device_name_err'] = 'Please enter Device Name';
      }

      // make sure no errors
      if(empty($data['room_name_err']) && empty($data['device_name_err'])){

        if($this->roomModel->addRoom($data)){
      
          flash('room_added', 'Room Added');
          redirect('dashboard');
        }

      } else{
        $this->view('rooms/newroom', $data);
      }


   } else{
    $id = $_SESSION['user_id'];
   
    $rooms = $this->roomModel->getRooms($id);
    $user = $this->userModel->getUser($id);

    $data = [
      'user' => $user,
      'rooms' => $rooms,
      //'room_id' => 
      'room_name' => '',
      //'device_name' =>
      'room_name_err' => '',
      'device_name_err' => ''
    ];
    $this->view('rooms/newroom', $data);

   }
   
  }

  public function newdevice(){

    $id = $_SESSION['user_id'];
    $user = $this->userModel->getUser($id);


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $threeRandomDigit = mt_rand(100,999);
      $roomId = 3;

      $data = [
        'user' => $user,
        'device_name' => $_POST['dname'],
        'device_name_err' => '',
        'device_id' => $threeRandomDigit,
        'room_id' => $roomId

      ];

      if(empty($data['device_name'])){
        $data['device_name_err'] = "Please enter device name" ;

      }

      if(empty($data['device_name_err'])){
          if($this->deviceModel->addDevice($data)){
            redirect('dashboard/index');
          }else{
            die('something wrong');
          }
      }else{
        // lOAD VIEW WITH ERRORS
        $this->view('rooms/newdevice',$data);

      }

    }else{
      $data = [
        'user' => $user,
        'device_name' => '',
        'device_name_err' => '',
        'device_id' => '',
        'room_id' => ''

      ];

      $this->view('rooms/newdevice',$data);
    }

  }

  
}