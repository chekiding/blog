<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{

  public function index(){
    $users = $this->paginate('Users');
    //pr ($users);
    $this->set('users',$users);
  }

  public function view($id=null){
    if($id==null){
      die('No ID. Try again');
    }

    $user = $this->Users->get($id);
    //pr ($user);
    $this->set('user',$user);
  }

  public function add(){

  }

  public function delete(){

  }

}

 ?>
