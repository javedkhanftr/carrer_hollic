<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'value', 'context', 'autoload', 'public', 'settingable_type', 'settingable_id'
    ];

    protected static $logAttributes = [
        'name', 'context'
    ];

   
}
