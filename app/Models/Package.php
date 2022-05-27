<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table    = 'packages';

    protected $casts = [
        'modules' => 'array',
    ];

    protected $fillable = ['name', 'price', 'billing_type', 'storage', 'projects', 'tasks', 'users', 'modules'];

    public $timestamps  = true;
}
