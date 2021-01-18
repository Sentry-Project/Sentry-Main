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
    $avgtemp = $this->sensorModel->getAVETem($id);
    $gas = $this->sensorModel->getgas($id);
    $waterlevel = $this->sensorModel->getwater($id);
    $ondevice = $this->sensorModel->getondevice_num($id);
    $offdevice = $this->sensorModel->getoffdevice_num($id);
    $onsensor = $this->sensorModel->getonsensor_num($id);
    $offsensor = $this->sensorModel->getoffsensor_num($id);
    $warning = $this->warning($id);
    $shownote= $this->shownote($id);


    $data = [
      'title' => 'Welcome',
      'rooms' => $rooms,
      'user' => $user,
      'room' => $room,
      'sensors'=> $sensors,
      'devices'=> $devices,
      'avgtemp'=> $avgtemp,
      'gas'=> $gas,
      'waterlevel'=> $waterlevel,
      'ondevice' => $ondevice,
      'offdevice' => $offdevice,
      'onsensor' => $onsensor,
      'offsensor' => $offsensor,
      'warning' => $warning,
      'shownote'=> $shownote

    ];

    $this->view('dashboard/index', $data);

  }
    public function room(){
      $id = $_SESSION['user_id'];
      $room_id=7709;

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

     public function warning($id){
        $results = $this->sensorModel->getsensor($id);
     
        return $results;
     }

     public function shownote($id){
        $results = $this->sensorModel->getsensor($id);
        if($results){
        foreach ($results as $result) {
          if($result->SENSOR_NAME == 'temperature'and $result->SENSOR_VALUE >= 45){

            $this->sensorModel->offdev($id);
            return true;

          }
            elseif($result->SENSOR_NAME == 'co'and $result->SENSOR_VALUE > 45){
             $this->sensorModel->offdev($id);
            return true;
          }elseif($result->SENSOR_NAME == 'water'and $result->SENSOR_VALUE >= 0.005){
             $this->sensorModel->offdev($id);
            return true;  
          }   
        }
        return false;
      }
      else{
        return false;
      }
   }
 
}