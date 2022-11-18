<?php

namespace App\Repositores\Eloquent;

use App\Models\Product;
use App\Repositores\Eloquent\Contracts\ProductrepositoryInterface;

class Productrepository extends AbstractRepository implements ProductrepositoryInterface
{
    protected $model = Product::class;


}
