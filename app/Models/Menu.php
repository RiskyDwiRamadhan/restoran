<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;
use App\Models\DetaiOrder;
use App\Models\OrderSementara;

class Menu extends Model
{
    // use HasFactory;
    protected $table="menu"; 
    public $timestamps= false;
    protected $primaryKey = 'id_menu';
    protected $keyType = "string";
    /**
     * The attributes that are mass assignable.
     *
     *  @var array
     */
    protected $fillable = [
        'id_menu',
        'nama_menu',
        'harga_menu',
        'jenis_menu',
        'deskripsi',
        'image'
    ];

    public function favorite()
    {
        return $this->hashMany(Favorite::class, 'id_menu');
    }

    public function dorder()
    {
        return $this->hashMany(DetailOrder::class, 'id_dorder');
    }
    
    public function sorder()
    {
        return $this->hashMany(OrderSementara::class, 'id_menu');
    }
}
