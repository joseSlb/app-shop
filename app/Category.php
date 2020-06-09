<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      // $category-> product
    public function products()
    {
        return $this->hasmany(Product::class); // hassmany: muchos productos en category
    }
}
