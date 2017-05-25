<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController{

  public function index(){
    $posts = $this->paginate('Posts',['contain'=>['Users']]);
    //pr ($users);
    $this->set('posts',$posts);
    $this->set('_serialize',['post']);
  }

  public function view($id=null){
    if($id==null){
      die('No ID. Try again');
    }

    $post = $this->Posts->find()
    ->contain([
      'Users'
    ])
    ->where([
      'Posts.id'=>$id
    ])
    ->first()
    ;

    //$post = $this->Posts->get($id,);
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

    $users = $this->Posts->Users->find('list');
    //pr ($users->toArray());exit;

    $this->set('post',$post);
    $this->set('users',$users);
  }

  public function edit($id=null){
    $post = $this->Posts->get($id);

    if ($this->request->is(['post','put','patch'])){
      $post = $this->Posts->patchEntity($post,$this->request->data());

      if ($this->Posts->save($post)){
        $this->Flash->success('Edited!!');

        return $this->redirect(['action'=>'index']);
      }
    }
    $this->set('post',$post);
    //pr ($user);
  }

  public function delete($id=null){
    $post = $this->Posts->get($id);

    if ($this->Posts->delete($post)){
      $this->Flash->success('Deleted!!');

      return $this->redirect(['action'=>'index']);
    }
  }

}

 ?>
