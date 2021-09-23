<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'id',
        'n_title',
        'n_details',
        
        'file',
        'file_multiple',
        '_token'
    ];
}