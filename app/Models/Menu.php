<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;

class Menu extends Model
{
    // use HasFactory;
    protected $table="menu"; 
    public $timestamps= false;
    protected $primaryKey = 'id_menu';
    /**
     * The attributes that are mass assignable.
     *
     *  @var array
     */
    protected $fillable = [
        'id_menu',
        'nama_nemu',
        'harga_nemu',
        'jenis_nemu',
        'deskripsi'
    ];

    public function favorite()
    {
        return $this->hashMany(Favorite::class, 'id_menu');
    }
}
