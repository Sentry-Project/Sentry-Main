<?php
  class Device{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function getDevices($room){
        $this->db->query("SELECT * 
        FROM device INNER JOIN room ON device.FK_ROOM_ID= room.ROOM_ID
        WHERE room.ROOM_ID= :room");
        $this->db->bind(':room', $room);
   
        $results = $this->db->resultSet();
  
        return $results;    
    }

    public function addDevice($data){
      $this->db->query("INSERT INTO device(DEVICE_ID, DEVICE_NAME, DEVICE_STATUS, FK_ROOM_ID) 
        VALUES (:device_id, :device_name, '1', :room_id)");
      
      $this->db->bind(':device_id', $data['device_id']);
      $this->db->bind(':device_name', $data['device_name']);
      $this->db->bind(':room_id', $data['room_id']);

      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

    }



  }