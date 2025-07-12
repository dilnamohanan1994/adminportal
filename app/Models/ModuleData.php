<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleData extends Model
{
    use HasFactory;

    protected $fillable = ['module', 'data'];
    
    protected $casts = ['data' => 'array'];
}
