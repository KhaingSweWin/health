<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::All();
       // $doctors=Doctor::orderBy('id','desc')->get();
      // $doctors=Doctor::where('age','>',30)->where('age','<',50)->get();
        return view('doctor.index')->with('doctors',$doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'name'=>'required',
                'field'=>'required',
                'age'=>'required|numeric|max:100|min:20',
                'phone'=>'required',
                'image'=>'required'
            ],
            [
                'name.required'=>'Please fill name'
            ]
            );
        
        $doctor=new Doctor();
        $doctor->name=$request->name;
        $doctor->field=$request->field;
        $doctor->age=$request->age;
        $doctor->phone=$request->phone;
       // $imageName = $request->file('image')->getClientOriginalName();
 
        //$path = $request->file('image')->store('public/img/doctors');
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/doctors'), $imageName);

        $doctor->image=$imageName;
        //$request->image->storeAs('images', $imageName);
        // storage/app/images/file.png
        $doctor->save();

        return redirect()->route('doctor.index');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       // $doctor=Doctor::find(3);
       $doctor=Doctor::where('field','like','%Health%')->first();

        return view('doctor.view')->with('doctor',$doctor);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
        return view('doctor.edit')->with('doctor',$doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
        $request->validate(
            [
                'name'=>'required',
                'field'=>'required',
                'age'=>'required|numeric|max:100|min:20',
                'phone'=>'required',
                'image'=>'required'
            ],
            [
                'name.required'=>'Please fill name'
            ]
            );
            $doctor->name=$request->name;
            $doctor->field=$request->field;
            $doctor->age=$request->age;
            $doctor->phone=$request->phone;
           // $imageName = $request->file('image')->getClientOriginalName();
     
            //$path = $request->file('image')->store('public/img/doctors');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/doctors'), $imageName);
    
            $doctor->image=$imageName;
            //$request->image->storeAs('images', $imageName);
            // storage/app/images/file.png
            $doctor->save();    
            return redirect()->route('doctor.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
