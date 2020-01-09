<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = [
        'user_type', 'user_id', 'event', 'auditable_id', 'auditable_type', 'old_values', 'new_values', 'url', 'ip_address', 'user_agent', 'tags',
    ];

}
