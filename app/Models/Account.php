<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'name',
        'level',
        'bounty',
        'image',
        'fruit_id'
    ];

    public function fruit()
    {
        return $this->belongsTo(Fruit::class, 'fruit_id', 'id');
    }

}
