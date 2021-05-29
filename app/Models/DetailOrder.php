<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\Order;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table="detail_order"; 
    public $timestamps= false;
    protected $primaryKey = 'id_dorder';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_dorder',
        'id_order',
        'id_menu',
        'qty',
        'harga'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
    
   public function order()
   {
       return $this->belongsTo(Order::class, 'id_order');
   }
}
