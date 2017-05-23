<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{

  public function index(){
    $users = $this->paginate('Users');
    //pr ($users);
    $this->set('users',$users);
    
  }
}

 ?>
