<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passport;
use App\Models\Doctor;
use Illuminate\Http\Request;

class TestERMController extends Controller
{
    //
    public function show()
    {
        $user=User::find(7);
        //echo $user->passport_no;
       
        $passport=Passport::findOrFail(1);
        echo $passport->user->name;
        echo $user->passport->passport_no;
        $doctor=Doctor::findOrFail(2);
        echo $doctor->field->name;
    }
}
