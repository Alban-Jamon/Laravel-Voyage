<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = ['location','description','traveDate', 'price', 'organizer', 'note', 'views'];
}
