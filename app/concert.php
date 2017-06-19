<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concert extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'concerts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_concert';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_concert','kelas','kapasitas','harga','jadwal_mulai','jadwal_selesai'];
    
}
