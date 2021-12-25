<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $fillable=['name','year','major'];
    public function subjects()
    {
       return $this->belongsToMany(Subject::class,Student_Subject::class);
    }
}
