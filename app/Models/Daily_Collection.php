<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_Collection extends Model
{
    use HasFactory;

    protected $table = 'daily_collections';

    public $timestamps = false;

    protected $fillable = [
        'date_id',
        'fruit_id'
    ];

    public function fruit()
    {
        return $this->belongsTo(Fruit::class, 'fruit_id', 'id');
    }

    public function collection_day()
    {
        return $this->belongsTo(Collection_Day::class, 'date_id', 'id');
    }

}
