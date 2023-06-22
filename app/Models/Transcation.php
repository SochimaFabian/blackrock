<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transcation extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function user(){
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
