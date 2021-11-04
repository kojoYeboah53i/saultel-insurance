<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthFacilities extends Model
{
    use HasFactory;
   protected $table = 'healthFacilities';
   protected $primaryKey = 'id';

   protected $fillable = 
   ['region', 'district', 'phone',
    'email', 'facility_type', 'facility_name',
     'lat',
     'long', 'description', 'image', 'user_id'];

     public function role(){
        return $this->belongsToMany(Role::class);
    }
}
