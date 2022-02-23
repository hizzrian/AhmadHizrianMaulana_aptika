<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;
     // protected $fillable = ['title', 'mini_description' ,'description', 'sku', 'price', 'height', 'stock', 'link'];
     protected $guarded = ['id'];

     protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search)
        {
            return $query->where('title', 'like', '%' . $search . '%')
                            ->orWhere('description', 'like', '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }

     public function category()
     {
         return $this->belongsTo(Category::class);
     }
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function getRouteKeyName()
     {
         return 'slug';
     }

     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
