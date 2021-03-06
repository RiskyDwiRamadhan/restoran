<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetaiOrder;
use App\Models\Meja;
use App\Models\Transaksi;

class Order extends Model
{
    // use HasFactory;s
    protected $table="order"; 
    public $timestamps= false;
    protected $primaryKey = 'id_order';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_order',
        'id_meja',
        'harga_total',
        'tgl_order'
    ];
    
   public function meja()
   {
       return $this->belongsTo(Meja::class, 'id_meja');
   }

   public function dorder()
   {
       return $this->hashMany(DetailOrder::class, 'id_dorder');
   }

   public function transaksi()
   {
       return $this->hashMany(Transaksi::class, 'id_dorder');
   }
}
