<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\UrlObserver;

class Url extends Model
{
    use HasFactory;
    protected $fillable=[
        'url',
        'url_id',
        'url_type',
    ];

    public static function boot(){
        parent::boot();
        Url::observe(UrlObserver::class);
    }
}
