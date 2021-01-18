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

   // get sensor information
  public function getsensor($id){
    $this->db->query("select sensor_data.SENSOR_VALUE, room.ROOM_NAME, sensor.SENSOR_NAME
      from sensor_data,sensor,room,user
      where sensor.SENSOR_ID=sensor_data.FK_SENSOR_ID 
      and sensor.FK_ROOM_ID=room.ROOM_ID
      and user.USER_ID= room.FK_USER_ID
      and user.USER_ID= :id
      ORDER by sensor_data.TIMESTAMP DESC
      LIMIT 3"); 

        $this->db->bind(':id', $id);
        $row = $this->db->resultSet();

        if($this->db->rowCount()>0){
           return $row;
       }else{
           return false;
       }
  }

  //when the danger level is high,turn off all the devices
     public function offdev($id){
     $this->db->query("update device,room,user set device.DEVICE_STATUS= '0' 
      Where  device.FK_ROOM_ID = room.ROOM_ID
      and user.USER_ID= room.FK_USER_ID
      and user.USER_ID= :id ");

      $this->db->bind(':id', $id);
       if($this->db->execute()){
           return true;
         } else {
        return false;
         }
      }

     //get the average temperature of the house(whole rooms)
    public function getAVETem($id){
      $this->db->query("select round(AVG(sensor_data.SENSOR_VALUE),2) as ave_tem
      from sensor_data,sensor,room,user
      Where sensor_data.FK_SENSOR_ID = sensor.SENSOR_ID 
      and sensor.FK_ROOM_ID = room.ROOM_ID
      and user.USER_ID= room.FK_USER_ID
      and sensor.SENSOR_NAME = 'temperature' 
      and user.USER_ID= :id");

      $this->db->bind(':id', $id);
        $row = $this->db->single();

        if($this->db->rowCount()>0){
           return $row;
       }else{
           return false;
       }
    }

        //get the gas reading(co concentration) of the kichen
        public function getgas($id){
          $this->db->query( "select sensor_data.SENSOR_VALUE as kitchen_gas
          from sensor_data,sensor,room,user
          where sensor.SENSOR_ID=sensor_data.FK_SENSOR_ID 
          and sensor.FK_ROOM_ID=room.ROOM_ID
          and user.USER_ID= room.FK_USER_ID
          and sensor.SENSOR_NAME='co'
          and user.USER_ID= :id");
          $this->db->bind(':id', $id);
          $row = $this->db->single();

            if($this->db->rowCount()>0){
               return $row;
           }else{
               return false;
           }
        }

        //get the water_level of the kitchen
        public function getwater($id){
          $this->db->query("select sensor_data.SENSOR_VALUE as water_level
          from sensor_data,sensor,room,user
          Where sensor_data.FK_SENSOR_ID = sensor.SENSOR_ID 
          and sensor.FK_ROOM_ID = room.ROOM_ID
          and user.USER_ID= room.FK_USER_ID
          and sensor.SENSOR_NAME='water' 
          and user.USER_ID=:id ");
          $this->db->bind(':id', $id);
          $row = $this->db->single();

            if($this->db->rowCount()>0){
               return $row;
           }else{
               return false;
           }
        }

        public function getondevice_num($id){
          $this->db->query("select COUNT(DEVICE_ID) as On_device
          from device,room,user
          Where  device.FK_ROOM_ID = room.ROOM_ID
          and user.USER_ID= room.FK_USER_ID
          and DEVICE_STATUS=1 
          and user.USER_ID=:id ");

          $this->db->bind(':id', $id);
          $row = $this->db->single();

            if($this->db->rowCount()>0){
               return $row;
           }else{
               return false;
           }
        }

        //get the number of inactive device
        public function getoffdevice_num($id){
          $this->db->query("select COUNT(DEVICE_ID) as Off_device
          from device,room,user
          Where  device.FK_ROOM_ID = room.ROOM_ID
          and user.USER_ID= room.FK_USER_ID
          and DEVICE_STATUS=0 
          and user.USER_ID=:id ");

          $this->db->bind(':id', $id);
          $row = $this->db->single();

            if($this->db->rowCount()>0){
               return $row;
           }else{
               return false;
           }
        }

        //get the number of active sensor
        public function getonsensor_num($id){
          $this->db->query("select COUNT(ID) as On_sensor
          from sensor_data,sensor,room,user
          Where sensor_data.FK_SENSOR_ID = sensor.SENSOR_ID 
          and sensor.FK_ROOM_ID = room.ROOM_ID
          and user.USER_ID= room.FK_USER_ID
          and SENSOR_STATUS=1 
          and user.USER_ID=:id ");

          $this->db->bind(':id', $id);
          $row = $this->db->single();

            if($this->db->rowCount()>0){
               return $row;
           }else{
               return false;
           }
        }

        //get the number of inactive sensor
        public function getoffsensor_num($id){
          $this->db->query("select COUNT(ID) as Off_sensor
          from sensor_data,sensor,room,user
          Where sensor_data.FK_SENSOR_ID = sensor.SENSOR_ID 
          and sensor.FK_ROOM_ID = room.ROOM_ID
          and user.USER_ID= room.FK_USER_ID
          and SENSOR_STATUS=0 
          and user.USER_ID= :id ");
          
          $this->db->bind(':id', $id);
          $row = $this->db->single();

            if($this->db->rowCount()>0){
               return $row;
           }else{
               return false;
           }
        }

}