<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{ 
    use HasFactory;
    use SoftDeletes;
 public function scopeIsmahen($query){
   return $query->where("description" , "ismahen");
 }
   //protected $fillable = ['title', 'description'];
     protected $guarded = [];

    public $timestamps = false;
}
