<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'thumb',
        'series',
        'type',
        'sale_date',
        'description',
        'price',
    ];
}
