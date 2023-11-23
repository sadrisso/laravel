<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    //Mutator
    function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    //Accessor
    function getNameAttribute($value){
        return ucfirst($value);
    }
};
