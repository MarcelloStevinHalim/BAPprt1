<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa2 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa2s';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['studentID', 'nama', 'jurusan', 'tahunMasuk'];

    
}
