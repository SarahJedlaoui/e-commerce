<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;


class Post extends Model
{
    use HasFactory;
    protected $table = 'Post';

    public $timestamps = true;
    protected $casts = [
    'price' => 'float'
    ];
    protected $fillable = [
    'title',
    'body',  
    'image'

    ];
    public function category ()
    {
        return $this->belongsTo('\App\Models\Category');
    }
    public function user ()
    {
        return $this->belongsTo('\App\Models\User');
    }
    public function comments() 
    {
        return $this->hasMany('\App\Models\Comment');
    }

}
