<?php

class Dashboard extends Controller {
  public function __construct()
  {
    $this->userModel = $this->model('User');
    $this->roomModel = $this->model('Room');
    $this->sensorModel= $this->model('Sensor');
    $this->deviceModel= $this->model('Device');
    
  }

  public function index(){

    $id = $_SESSION['user_id'];
    $room_id= 3;

    $rooms = $this->roomModel->getRooms($id);
    $user = $this->userModel->getUser($id);
    $room = $this->roomModel->getRoom($id,$room_id);
    $sensors = $this->sensorModel->getSensors($room_id);
    $devices = $this->deviceModel->getDevices($room_id);

    $data = [
      'title' => 'Welcome',
      'rooms' => $rooms,
      'user' => $user,
      'room' => $room,
      'sensors'=> $sensors,
      'devices'=> $devices
    ];

    $this->view('dashboard/index', $data);

  }
    public function room(){
      $id = $_SESSION['user_id'];
      $room_id=3;

      $rooms = $this->roomModel->getRooms($id);
      $user = $this->userModel->getUser($id);
      $room = $this->roomModel->getRoom($id,$room_id);
      $sensors = $this->sensorModel->getSensors($room_id);
      $devices = $this->deviceModel->getDevices($room_id);

      $data = [
        'title' => 'Welcome',
        'rooms' => $rooms,
        'user' => $user,
        'room' => $room,
        'sensors'=> $sensors,
        'devices'=> $devices
      ];
      $this->view('dashboard/room', $data);

    }





 
}