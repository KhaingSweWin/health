<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            [
                'name'=>'khaing',
                'email'=>'khaing@gmail.com'
            ],
            [
                'name'=>'kyaw',
                'email'=>'kyaw@gmail.com'
            ],
            [
                'name'=>'thiri',
                'email'=>'thiri@gmail.com'
            ]
            ];
        return view('test',compact('data'));
    }
    
}
