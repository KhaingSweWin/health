<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Passport1;

class Passport1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Passport1::create([
            'user_id'=>1,
            'passport_no'=>'OM0988897'
        ]);
    }
}
