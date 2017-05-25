<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController{

  public function index(){
    $posts = $this->paginate('Posts');
    //pr ($users);
    $this->set('posts',$posts);
  }

  public function view($id=null){
    if($id==null){
      die('No ID. Try again');
    }

    $post = $this->Posts->get($id);
    //pr ($user);
    $this->set('post',$post);
  }

  public function add(){
    $post = $this->Posts->newEntity();

    if ($this->request->is('post')){
      //pr($this->request->data);exit;
      $post = $this->Posts->patchEntity($post,$this->request->data());

      if ($this->Posts->save($post)){
        $this->Flash->success('Saved!!');

        return $this->redirect(['action'=>'index']);
      }
    }
  }

  public function edit($id=null){
    $user = $this->Users->get($id);

    if ($this->request->is(['post','put','patch'])){
      $user = $this->Users->patchEntity($user,$this->request->data());

      if ($this->Users->save($user)){
        $this->Flash->success('Edited!!');

        return $this->redirect(['action'=>'index']);
      }
    }
    $this->set('user',$user);
    //pr ($user);
  }

  public function delete($id=null){
    $user = $this->Users->get($id);

    if ($this->Users->delete($user)){
      $this->Flash->success('Deleted!!');

      return $this->redirect(['action'=>'index']);
    }
  }

}

 ?>
