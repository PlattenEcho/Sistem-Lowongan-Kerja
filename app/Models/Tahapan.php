<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahapan extends Model
{
    use HasFactory;

    protected $table = 'tahapan';
    protected $guarded = ['id'];
    public $timestamps = FALSE;

    public function tahapanApply()
    {
        return $this->hasMany(TahapanApply::class, 'id_tahapan');
    }
}
