<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_Collection extends Model
{
    use HasFactory;

    protected $table = 'daily_collections';

    protected $fillable = [
        'date_id',
        'fruit_id'
    ];

}
