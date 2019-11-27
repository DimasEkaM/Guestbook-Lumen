<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Guest extends Model 
{
    
    protected $fillable = [
        'name', 'email','phone','company','type','palmex','duo','iko','tpe','flexideck_seam','other',
        'sales_id','photo','notes'
    ];
    protected $dates = [];

    protected $table = 'guest';

}