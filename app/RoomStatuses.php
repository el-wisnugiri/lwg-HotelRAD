<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomStatuses extends Model
{
    protected $fillable = [
        'roomStatusName', 'roomStatusDescription'
    ];
}
