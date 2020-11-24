<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'prototipo';

    // protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'rental_price', 'real_price'];

    public $timestamps = false;
}
