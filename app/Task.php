<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

      /**
       * 状態定義
       */
      const STATUS = [
          0 => [ 'label' => '作業中' ],
          1 => [ 'label' => '完了' ],
      ];

      /**
       * 状態のラベル
       * @return string
       */
      public function getStatusLabelAttribute()
      {
          // 状態値
          $status = $this->attributes['status'];

          // // 定義されていなければ空文字を返す
          // if (!isset(self::STATUS[$status])) {
          //     return '未着手';
          // }

          return self::STATUS[$status]['label'];
      }
  }
