<?php
class Users extends Controller{

    public function __construct()
  {
    $this->userModel = $this->model('User');
    $this->roomModel = $this->model('Room');
  }

public function register(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $data = [
        'first_name' => $_POST['FIRST_NAME'],
        'last_name' => $_POST['LAST_NAME'],
        'email' => $_POST['EMAIL'],
        'password' => $_POST['USER_PASSWORD'],
        'email_err' => ''
        
    ];

    // Check email
    if($this->userModel->checkEmail($data['email'])){
        $data['email_err'] = 'Sorry... email already taken';
    } 

    if(empty($data['email_err'])){
        // Validated
         // Hash password
    $data['password'] = md5($data['password']);  
           // Register user
    if($this->userModel->register($data)){
        redirect('users/login');
    } else{
        die('something wrong');
    }

    }   else{
        // lOAD VIEW WITH ERRORS
        $this->view('users/register', $data);
    }

} else {
    // Init data
    $data = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
        'email_err' => ''
        
    ];

    // load view
    $this->view('users/register', $data);
}




}

public function login(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $data = [
            'email' => $_POST['EMAIL'],
            'password' => $_POST['USER_PASSWORD'],
            'email_err' => '',
            'password_err' => '',
            
        ];

        if($this->userModel->checkEmail($data['email'])){
            //$data['email_err'] = '';
        } else{

            $data['email_err'] = 'User not found';
        }

        if(empty($data['email_err'])){
            $loggedUser = $this->userModel->login($data['email'], $data['password']);

            if($loggedUser){

                $this->userSession($loggedUser);
            }else{
                $data['password_err'] = "Incorrect Password";
                $this->view('users/login', $data);

            }
        } else {
                  
        $this->view('users/login', $data);
        }
       
} else{
    
    $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
        
    ];

    $this->view('users/login', $data);

}

}

public function setting(){
    

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $data = [

            'fname' => test_input($_POST["fname"]),
            'lname' => test_input($_POST["lname"]),
            'email' => test_input($_POST["email"]),
            'number' => test_input($_POST["number"]),
            'address' => test_input($_POST["address"]),
            'dnumber' => test_input($_POST["dnumber"]),
            'user_id' => $_SESSION['user_id']
      
        ];
        
       
          
        if($this->userModel->upUser($data['fname'],$data['lname'],$data['email'],$data['number'],$data['address'],$data['dnumber'],$data['user_id'])){
                redirect('dashboard');
            } else{
                die("Something went wrong");
                $this->view('dashboard/setting');
           }
        

} else{
    $id = $_SESSION['user_id'];
    $user = $this->userModel->getUser($id);
    $rooms = $this->roomModel->getRooms($id);


    $data = [
            'user' => $user,
            'rooms' => $rooms
        ];

        $this->view('dashboard/setting', $data);
}
}

public function userSession($user){

    $_SESSION['user_id']= $user->USER_ID;
    redirect('dashboard');
}

public function logout(){

    unset($_SESSION['user_id']);
    session_destroy();

    redirect('users/login');
}



}
