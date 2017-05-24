<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{
  public function initialize(array $config){
    parent::initialize($config);

    $this->setTable('users');
    $this->setPrimaryKey('id');
    $this->setDisplayField('name');
    //auto masuk datetime field created and modified
    $this->addBehavior('Timestamp');
  }

}
?>
