<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['subscriber_id', 'partner_id', 'policy_number',
                                 'end_date', 'start_date', 'is_active'];
}
