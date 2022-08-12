<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'content',
        'image_link',
        'source',
        'views_count',
        'user_id',
        'user_edit_id',
        'scope',
        'status',
    ];
}
