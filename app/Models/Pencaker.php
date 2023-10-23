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

    public function appliedLoker()
    {
        return $this->hasMany(ApplyLoker::class, 'no_ktp', 'no_ktp');
    }
}
