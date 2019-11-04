<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary_group extends Model
{
    protected $table = 'salary_groups';

    protected $fillable = [
        'name', 'des', 'basic','fd','fa','vd','va'
    ];
}
