<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Favorite as Authenticatable;
use App\Models\Menu;

class Favorite extends Model
{
   // use HasFactory;
   protected $table="favorite"; 
   public $timestamps= false;
   protected $primaryKey = 'id_favorite';
   /**
    * The attributes that are mass assignable.
    *
    *  @var array
    */
   protected $fillable = [
      'id_favorite',
      'id_menu',
      'tangal_favorite'
   ];
   
   public function menu()
   {
       return $this->belongsTo(Menu::class);
   }
}
