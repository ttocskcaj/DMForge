<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use GetStream\StreamLaravel\Eloquent\ActivityTrait;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Sluggable, ActivityTrait;
    protected $fillable = [
        'title', 'description', 'password', 'user'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
