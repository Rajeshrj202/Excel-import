<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterDetails extends Model
{
    use HasFactory;

    protected $table = 'router_details';
    public $timestamps = false;

    protected $fillable = [
        'sapid',
        'hostname',
        'loopback',
        'mac_address'
    ];
}
