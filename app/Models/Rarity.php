<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    protected $table = 'rarities';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'chances_on_getting',
        'class'
    ];

    public function fruits()
    {
        return $this->hasMany(Fruit::class, 'rarity_id', 'id');
    }

}
