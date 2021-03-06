<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;
    protected $table = 'service_provider';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'address', 'partner_id', 'phone'];
}
