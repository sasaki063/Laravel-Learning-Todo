<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
      const STATUS = [
          0 => [ 'label' => '作業中' ],
          1 => [ 'label' => '完了' ],
      ];

      public function getStatusLabelAttribute()
      {
          $status = $this->attributes['status'];

          return self::STATUS[$status]['label'];
      }
  }
