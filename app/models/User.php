<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function register($data){
      $this->db->query("INSERT INTO user (FIRST_NAME, LAST_NAME, EMAIL, USER_PASSWORD) VALUES(:first_name, :last_name, :email, :password)");

      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

    }

    
		public function login($email, $password){
      $this->db->query("SELECT * FROM user WHERE email = :EMAIL");
      $this->db->bind(':EMAIL', $email);

      $row = $this->db->single();

      $password=md5($password);
      $db_password = $row->USER_PASSWORD;

			if($password == $db_password){
        return $row;
      } else {
        return false;
      }
    }
    

    public function checkEmail($email){
		$this->db->query("SELECT * FROM user WHERE email = :EMAIL");
		$this->db->bind(':EMAIL', $email);
		
		
			$row = $this->db->single();
			if(  $this->db->rowCount()>0 ){
			return true;
			}else{
				return false;
			}
			
      }

      public function getUser($id)
      {
        $this->db->query("SELECT * FROM user WHERE USER_ID = :id"); 
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        if($this->db->rowCount() > 0){
          return $row;
        } else{
          return false;
        }
        

      }


      public function upUser($fname,$lname,$email,$number,$address,$dnumber,$id){
        $this->db->query("update user set FIRST_NAME=:fname,LAST_NAME=:lname,EMAIL=:email,PHONE_NUM=:number,ADDRESS=:address,EC_PHONE_NUM=:dnumber where USER_ID=:id");

        $this->db->bind(':fname', $fname);
        $this->db->bind(':lname', $lname);
        $this->db->bind(':email', $email);
        $this->db->bind(':number', $number);
        $this->db->bind(':address', $address);
        $this->db->bind(':dnumber', $dnumber);
        $this->db->bind(':id', $id);
         if($this->db->execute()){
           return true;
         } else {
        return false;
         }
       }

       /*public function upECUser($ecnumber,$id){
        $this->db->query("update emergency_contact set PHONE_NUM= :ecnumber where USER_USER_ID= :id");

        $this->db->bind(':ecnumber', $ecnumber);
        $this->db->bind(':id', $id);
         if($this->db->execute()){
           return true;
         } else {
          return false;
         }
       }*/
  }