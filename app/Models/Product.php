<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['model_number', 'category_id', 'department_name', 'manufacturer_name', 'upc', 'sku', 'regular_price', 'sale_price', 'description', 'regular_price', 'url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
