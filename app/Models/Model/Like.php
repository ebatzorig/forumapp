<?php

namespace App\Models\Model;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function reply(){
        return $this->belongsTo(Reply::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
