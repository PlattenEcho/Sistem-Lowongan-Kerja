<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLoker extends Model
{
    use HasFactory;

    protected $table = 'apply_loker';
    protected $guarded = ['id'];
    public $timestamps = FALSE;
}
