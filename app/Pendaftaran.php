<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function program_kursus()
    {
        return $this->belongsTo('App\ProgramKursus', 'id_program_kursus');
    }
}
