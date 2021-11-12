<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = 
    ['name', 'email','partner_id'];
 
      public function partner(){
         return $this->hasOne(Partner::class);
     }
}
