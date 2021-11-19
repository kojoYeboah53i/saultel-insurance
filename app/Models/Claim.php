<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['policy_number', 'service_provider_id', 'subscriber_id', 'institution',
    'department', 'doctor', 'treatment_type', 'diagnosis', 'treatment_description', 'uploaded_files_url', 'status'];
}
