<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Doctor::create(
            [
                'name'=>'Dr. Chris',
                'field_id'=>1,
                'age'=>'35',
                'phone'=>'0988765422',
                'image'=>'test.jpg'
            ]
        );
        /*DB::table('doctors')->insert([
            [
                'name'=>'Dr. Chris',
                'field'=>'Brain',
                'phone'=>'0988765422'
            ],
            [
                'name'=>'Dr. Thiri',
                'field'=>'Heart',
                'phone'=>'0988765422'
            ],
            [
                'name'=>'Dr. Win Aye',
                'field'=>'Heart',
                'phone'=>'0988765422'
            ]
    ]);*/
    }

}
