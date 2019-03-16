<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    public $table = 't_pelajaran';

    protected $fillable = [
        'nama_matpel', 'kd_keahlian', 'keahlian'
    ];

}