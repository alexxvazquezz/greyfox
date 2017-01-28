<?php

class Task {
  public $description;

  public $completed = false; //Protected means that it is no accesable from outside this class.

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
  public function isComplete()
  {
    return $this->completed;
  }

}




$tasks = [
    new Task('Go to the store'),
    new Task('Pick up Gaby from school'),
    new Task('Clean my room')
];

$tasks[0]->complete();
$tasks[2]->complete();

require 'index.view.php';
 ?>
