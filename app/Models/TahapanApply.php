<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapanApply extends Model
{
    use HasFactory;

    protected $table = 'tahapan_apply';
    protected $primaryKey = 'id_apply';
    protected $fillable = [
        'id_apply',
        'id_tahapan',
        'nilai',
        'tgl_update'
    ];
    public $timestamps = FALSE;

    public function applyLoker()
    {
        return $this->belongsTo(ApplyLoker::class, 'id_apply');
    }

    public function tahapan()
    {
        return $this->belongsTo(Tahapan::class, 'id_tahapan');
    }
}
