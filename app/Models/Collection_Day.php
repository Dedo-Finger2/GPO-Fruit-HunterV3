<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection_Day extends Model
{
    use HasFactory;

    protected $table = 'collection_days';

    protected $fillable = [
        'date'
    ];

}
