<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection_Day extends Model
{
    use HasFactory;

    protected $table = 'collection_days';

    public $timestamps = false;

    protected $fillable = [
        'date'
    ];

    public function fruits()
    {
        return $this->belongsToMany(Fruit::class, 'daily_collections', 'date_id', 'fruit_id');
    }

}
