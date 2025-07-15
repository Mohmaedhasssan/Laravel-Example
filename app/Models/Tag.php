<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function jobs(){
        return $this->belongsToMany(Job::class,relatedPivotKey:'job_listing_id');
    }
    public function Post(){
        return $this->belongsToMany(Post::class);
    }
}
