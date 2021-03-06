<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
  public function initialize(array $config){
    parent::initialize($config);

    $this->setTable('posts');
    $this->setPrimaryKey('id');
    $this->setDisplayField('title');
    //auto masuk datetime field created and modified
    $this->addBehavior('Timestamp');

    $this->belongsTo('Users',['foreignKey'=>'user_id']);
  }

}
?>
