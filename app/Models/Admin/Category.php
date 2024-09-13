<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes,Sluggable;

    protected $guarded=['id'];
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'titleFa'
            ]
        ];
    }


}
