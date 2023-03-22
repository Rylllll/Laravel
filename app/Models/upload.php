<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
   
    use HasFactory;
    protected $table = 'upimages';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'about', 'image'];
}
