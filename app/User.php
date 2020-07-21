<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran', 'id_user');
    }
    public function program_kursuses()
    {
        return $this->belongsToMany(
            ProgramKursus::class,
            Pendaftaran::class,
            'id_user',
            'id_program_kursus'
        )
            ->as('pendaftarans')
            ->withPivot('status');
    }

    public function sertifikats()
    {
        return $this->hasManyThrough(
            Sertifikat::class,
            Pendaftaran::class,
            'id_user', //foreign key pada tabel pendaftaran yang terkoneksi dengan user
            'id_pendaftaran', //foreign key pada tabel sertifikat
            'id', // local key pada tabel user
            'id' // local key pada tabel pendaftaran
        );
    }
}
