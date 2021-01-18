<?php
  class Sensor{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function getSensors($room){
        $this->db->query("SELECT * FROM sensor 
        INNER JOIN room Inner JOIN sensor_data 
        ON sensor.FK_ROOM_ID = room.ROOM_ID 
        AND sensor_data.FK_SENSOR_ID= sensor.SENSOR_ID 
           WHERE room.ROOM_ID= :room");
        $this->db->bind(':room', $room);
   
        $results = $this->db->resultSet();
  
        return $results;    
    }



}