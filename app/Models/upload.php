<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class upload extends Model
{
   
    use HasFactory, SoftDeletes;
    protected $table = 'upimages';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'about', 'image', 'category'];


}


