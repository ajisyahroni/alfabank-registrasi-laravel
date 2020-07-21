<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramKursus extends Model
{
    protected $fillable = ['nama', 'masa_studi', 'harga', 'kuota'];

    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran', 'id_program_kursus');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            Pendaftaran::class,
            'id_user',
            'id_pendaftaran'
        );
    }
}
