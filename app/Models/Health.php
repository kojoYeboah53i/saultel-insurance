<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = 
    ['region', 'district', 'phone',
     'email', 'facility_type', 'facility_name',
      'lat', 'created_at', 'updated_at',
      'long', 'ownership', 'description', 'town', 'image', 'user_id'];
 
      public function role(){
         return $this->belongsToMany(Role::class);
     }
}
