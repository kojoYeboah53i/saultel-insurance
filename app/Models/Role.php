<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id';

    protected $fillable = [ 'name'];

       public const IS_SUPERADMIN = 1;
       public const IS_PARTNER = 2;
       public const IS_SERVICEPROVIDER = 3;
       public const IS_AGENT = 4;
       public const IS_SUBSCRIBER = 4;
    
    public function user(){
        return $this->hasOne(User::class);
    } 
    public function serviceProvider(){
        return $this->hasMany(ServiceProvider::class);
    }
}
