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

    public function pencaker()
    {
        return $this->belongsTo(Pencaker::class, 'no_ktp', 'no_ktp');
    }

    public function loker()
    {
        return $this->belongsTo(Loker::class, 'id_loker');
    }
}
