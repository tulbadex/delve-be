<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    // Set the key type to string
    protected $keyType = 'string';

    // Disable auto-incrementing IDs
    public $incrementing = false;
}
