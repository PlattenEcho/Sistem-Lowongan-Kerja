<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencaker extends Model
{
    use HasFactory;

    protected $table = 'pencaker';
    protected $guarded = ['id'];
    public $timestamps = FALSE;
}
