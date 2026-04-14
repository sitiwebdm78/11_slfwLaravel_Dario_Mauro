<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monument extends Model
{
     use HasFactory;
    protected $fillable = [
        'visitname', 'authorname', 'year', 'story', 'img', 'user_id', 'address', 'is_default_image'
    ];

    public function user(){
        return $this->belongsTo(User::class);

        }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}

