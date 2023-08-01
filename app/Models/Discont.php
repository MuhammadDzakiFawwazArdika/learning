<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discont extends Model
{
    use HasFactory;
    protected $table = 'disconts';

    protected $fillable = [
        'diskon',
        'video_id',
    ];
}
