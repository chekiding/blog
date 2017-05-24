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
    $user = $this->Users->newEntity();

    if ($this->request->is('post')){
      //pr($this->request->data);exit;
      $user = $this->Users->patchEntity($user,$this->request->data());

      if ($this->Users->save($user)){
        $this->Flash->success('Saved!!');

        return $this->redirect(['action'=>'index']);
      }
    }
  }

  public function edit($id=null){
    $user = $this->Users->get($id);
    $this->set('user',$user);
    //pr ($user);


  }

}

 ?>
