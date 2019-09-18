<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
}
