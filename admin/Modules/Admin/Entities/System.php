<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'system';

    protected $fillable = [
        'id',
        'sys_name_th',
        'sys_name_en',
        'sys_subname_th',
        'sys_subname_en',
        'sys_facebook',
        'sys_facebook_link',
        'sys_phon',
        'sys_mail',
        'sys_address_th',
        'sys_address_en',
        
        'file',
        '_token'
    ];
}
