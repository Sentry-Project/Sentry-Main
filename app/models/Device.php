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



  }