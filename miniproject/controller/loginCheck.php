<?php
  session_start();
  require_once('../model/admin.php');
  
  $name = $_REQUEST['id'];
  $password = $_REQUEST['password'];
  
  if($name == '' || $password == '')
  {
      echo "null value! <br>"; 
  }
  else {
      $status = login($id, $password);
     
      if($status['status']){
          $_SESSION['user'] = array('id' => $id, 'userType' => $status['userType']);
          $_SESSION['password'] = $password;
          $_SESSION['flag'] = true;
  
          
          setcookie('id', $id, time()+30000, '/');
          setcookie('password', $password, time()+30000, '/');
  
          if (isset($_REQUEST['remember']))
          {
              setcookie('id', $name, time()+3000, '/');
              setcookie('password', $password, time()+3000, '/');
          }
  
          if($status['userType'] == 'Admin') {
              header('location: ../view/admindashboard.php');
          } elseif($status['userType'] == 'User') {
              header('location: ../view/userdashboard.php');      
        }
      }
      else{
          echo "Invalid username or password"; 
      }
  }
    
    
?>