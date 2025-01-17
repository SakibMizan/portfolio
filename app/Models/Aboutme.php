<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'about_me';
}
