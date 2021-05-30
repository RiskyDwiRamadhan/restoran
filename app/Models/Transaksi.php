<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Transaksi extends Model
{
    use HasFactory;
    protected $table="transaksi"; 
    public $timestamps= false;
    protected $primaryKey = 'id_transaksi';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_transaksi',
        'id_order',
        'tanggal_transaksi',
        'harga',
        'uang_bayar',
        'kembalian'
    ];
    
   public function order()
   {
       return $this->belongsTo(Order::class, 'id_order');
   }
}
