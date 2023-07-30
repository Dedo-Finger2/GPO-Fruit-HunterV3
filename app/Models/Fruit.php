<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    protected $table = 'fruits';

    protected $fillable = [
        'name',
        'image',
        'rarity_id',
        'description'
    ];

    public $timestamps = false;

    public function rarity()
    {
        return $this->belongsTo(Rarity::class, 'rarity_id', 'id');
    }

    public function accounts()
    {
        return $this->haveMany(Account::class, 'fruit_id', 'id');
    }

}
