<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Passport;
use App\Models\Doctor;
use App\Models\Student;
use App\Models\Subject;

class ERMController extends Controller
{
    //
    public function display()
    {
        //eager loading
       /* $user=User::find(1);
        echo $user->name.",";
        echo $user->passport1->passport_no;
        $passport=Passport::find(1);
        echo $passport->passport_no;
        echo $passport->user->name;
        $doctor=Doctor::find(2);
        echo $doctor->name. ":".$doctor->field->name;*/
        
        $subjects=Student::find(1)->subjects;
        foreach($subjects as $subject)
        {
            echo $subject->name;
        }
    }
}
