<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class applymembers extends Model
{
    use SoftDeletes;

    protected $date = ['deleted_at'];
}
