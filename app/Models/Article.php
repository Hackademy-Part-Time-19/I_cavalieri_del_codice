<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory , Searchable;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'user_id',
        'category_id',
    ];

    public function toSearchableArray(){

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body'=> $this->body,
            'category'=> $this->category,
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    
}
