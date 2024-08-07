<?php

namespace App\Models;

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplicant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name','email','cv','message'
    ];

    public function Job(){
        return $this->belongsTo(JobPost::class);
    }

   
}
