<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function subscriber(){
        return $this->hasMany('App\Models\Subscriber');
    }
}