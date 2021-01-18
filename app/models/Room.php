<?php
  class Room {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

  public function addRoom($data){

 $stmt1 = $this->db->query('INSERT INTO room (ROOM_ID, ROOM_NAME, FK_USER_ID) VALUES (:room_id, :room_name, :user_id)');

  // Bind values
  $this->db->bind(':room_id', $data['room_id']);
  $this->db->bind(':room_name', $data['room_name']);
  $this->db->bind(':user_id', $data['user_id']);

  
      // Execute
      if($this->db->execute()){
        $this->db->query('INSERT INTO device (DEVICE_ID, DEVICE_NAME, DEVICE_STATUS, FK_ROOM_ID) VALUES (:device_id, :device_name, :device_status, :room_id)');

        $this->db->bind(':device_id', $data['device_id']);
        $this->db->bind(':device_name', $data['device_name']);
        $this->db->bind(':device_status', $data['device_status']);
        $this->db->bind(':room_id', $data['room_id']);

        if($this->db->execute()){
          $this->db->query("INSERT INTO sensor(SENSOR_ID,SENSOR_TYPE,SENSOR_NAME,SENSOR_UNITS,FK_ROOM_ID) 
        SELECT :sensor_id, 'temperature','temperature','celsius',:room_id
        FROM room
        WHERE ROOM_ID= :room_id");
        $this->db->bind(':sensor_id', $data['sensor_id']);
        $this->db->bind(':room_id', $data['room_id']);

        if($this->db->execute()){
          return true;
        } else{
          return false;
          
        }

        } else{
          return false;
        }

        return true;
      } else {
        return false;
      }

}

  public function getRooms($id){
    $this->db->query("SELECT ROOM_ID, ROOM_NAME FROM room 
                      INNER JOIN user 
                      ON room.FK_USER_ID = user.USER_ID
                      WHERE  FK_USER_ID = :id");

    $this->db->bind(':id', $id);
   
      $results = $this->db->resultSet();

      return $results;
  }

 
    public function getRoom($user,$room){
      $this->db->query( " select *
    FROM room INNER JOIN user ON room.    FK_USER_ID = user.USER_ID
    WHERE user.USER_ID =:user AND room.ROOM_ID = :room");
    $this->db->bind(':user', $user);
    $this->db->bind(':room', $room);
    $results = $this->db->single();

    return $results;

    }
}
