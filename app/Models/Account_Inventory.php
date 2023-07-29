<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_Inventory extends Model
{
    use HasFactory;

    protected $table = 'account_inventories';

    protected $fillable = [
        'account_id',
        'fruit_id'
    ];

}
