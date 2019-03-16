<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public $table = 't_guru';

    protected $fillable = [
        'nip', 'nama_guru', 'tgl_lahir', 'jenis_kelamin'
    ];
}