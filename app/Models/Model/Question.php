<?php

namespace App\Models\Model;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    // use HasFactory;

    // protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reply(){
        return $this->hasMany(Reply::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }
}
