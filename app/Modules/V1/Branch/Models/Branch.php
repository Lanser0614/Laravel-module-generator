<?php

namespace App\Modules\V1\Branch\Models;

use Illuminate\Database\Eloquent\Model;;

/**
 */
class Branch extends Model
{

    protected $table = 'name';
    protected $connection;
    protected $fillable = ['name'];
}
