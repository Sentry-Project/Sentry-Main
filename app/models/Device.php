<?php
  class Device{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function getDevices($room){
        $this->db->query("SELECT * 
        FROM DEVICE INNER JOIN ROOM ON DEVICE.FK_ROOM_ID= room.ROOM_ID
        WHERE ROOM.ROOM_ID= :room");
        $this->db->bind(':room', $room);
   
        $results = $this->db->resultSet();
  
        return $results;    
    }



  }