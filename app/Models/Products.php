<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name',
        'sku',
        'store_id',
        'description',
        'price',
    ];

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
