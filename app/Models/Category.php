<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['category', 'remarks'];

    protected $guarded = [];

    public static function list() {
        $categories = Category::orderBy('category')->get();
        $list = [];
        foreach($categories as $c) {
            $list[$c->id] = $c->category;
        }
        return $list;
    }

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }

}
