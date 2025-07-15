<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
   use SoftDeletes;
   protected $fillable = ['title', 'content'];

   public function Tags(){
      return  $this->belongsToMany(Tag::class);
   }
}
