<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Monolog\Registry;

class Course extends Model
{
    protected $fillable = ['course_name', 'capacity', 'reg_student'];


    public function registration()
    {
        return $this->hasMany(Registration::class);
    }
}
