<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function variation()
    {
        return $this->hasOne(Variation::class);
    }
}
