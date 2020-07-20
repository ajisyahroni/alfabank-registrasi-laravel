<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sertifikat extends Model
{
    use SoftDeletes;
    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class,'id_pendaftaran');
    }
}
