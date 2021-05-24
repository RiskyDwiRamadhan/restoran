<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class OrderSementara extends Model
{
    use HasFactory;
    protected $table="order_sementara"; 
    public $timestamps= false;
    protected $primaryKey = 'id_sorder';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_sorder',
        'id_menu',
        'qty',
        'harga'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
