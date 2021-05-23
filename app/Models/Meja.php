<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    // use HasFactory;
    protected $table="meja"; 
    public $timestamps= false;
    protected $primaryKey = 'id_meja';
    /**
     * The attributes that are mass assignable.
     *
     *  @var array
     */
    protected $fillable = [
        'id_meja',
        'no_meja',
        'kapasitas',
        'status_meja',
        'image',
    ];
}
