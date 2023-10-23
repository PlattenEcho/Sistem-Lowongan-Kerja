<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'loker';
    protected $guarded = ['id'];
    public $timestamps = FALSE;

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }

    public function appliedFor()
    {
        return $this->hasMany(ApplyLoker::class, 'id_loker');
    }
}
